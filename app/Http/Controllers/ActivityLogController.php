<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Spatie\Activitylog\Models\Activity;

class ActivityLogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => array('logForReact')]);
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $activityLogs = Activity::query()
                ->select('activity_log.*', 'users.id as user_id', 'users.name as user_name')
                ->leftJoin('users', 'users.id', '=', 'activity_log.causer_id')
                ->orderBy('activity_log.created_at', 'desc');
            return DataTables::of($activityLogs)
                ->addIndexColumn()
                ->editColumn('log_name ', function ($activityLog) {
                    return $activityLog->log_name ?? 'N/A';
                })
                ->editColumn('user', function ($activityLog) {
                    return $activityLog->causer->name ?? 'N/A';
                })
                ->editColumn('description', function ($activityLog) {
                    return $activityLog->description;
                })
                ->editColumn('created_at', function ($activityLog) {
                    return $activityLog->created_at->format('Y-M-d H:i:s');
                })
                ->editColumn('updated_at', function ($activityLog) {
                    return $activityLog->updated_at->format('Y-M-d H:i:s');
                })
                ->editColumn('properties', function ($activityLog) {
                    $properties = json_decode($activityLog->properties, true);
                    if (isset($properties['changes'])) {
                        $changes = json_decode($properties['changes'], true);
                        $table = '<table>';
                        $table .= '<tr><th>Attribute</th><th>Old Value</th><th>New Value</th></tr>';
                        foreach ($changes as $change) {
                            if (!empty($change)) {
                                $attribute = $change['attribute'];
                                $oldValue = $change['old_value'];
                                $newValue = $change['new_value'];
                                $table .= '<tr><td>' . $attribute . '</td><td>' . $oldValue . '</td><td>' . $newValue . '</td></tr>';
                            }
                        }
                        $table .= '</table>';
                        return $table;
                    } else {
                        return 'No changes available';
                    }
                })
                
                ->rawColumns(['user', 'description', 'created_at', 'updated_at', 'properties'])
                ->make(true);
        }

        return view('user-activity-log.list.index');
    }

    public function logForReact(Request $request)
    {
        $activityLogs = Activity::query()
                ->select('activity_log.*', 'users.id as user_id', 'users.name as user_name')
                ->leftJoin('users', 'users.id', '=', 'activity_log.causer_id')
                ->orderBy('activity_log.created_at', 'desc');
        return DataTables::of($activityLogs)->make(true);
    }
}
