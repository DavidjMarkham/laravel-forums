<?php

namespace BishopB\Forum;

class Permission extends BaseModel
{
    // validation
    protected $rules = [
        'RoleID'         => 'exists:GDN_Role,RoleID',
        'JunctionTable'  => 'max:100',
        'JunctionColumn' => 'max:100',
        'JunctionID'     => 'integer',
        // any other columns with dots in them are boolean
    ];

    // definitions
    protected $table = 'GDN_Permission';
    protected $primaryKey = 'PermissionID';

    // relations
    public function role()
    {
        return $this->hasOne(
            '\BishopB\Forum\Role', 'RoleID', 'RoleID'
        );
    }

}
