<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_instance_admin.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for BigtableInstanceAdmin.DeleteAppProfile.
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.DeleteAppProfileRequest</code>
 */
class DeleteAppProfileRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique name of the app profile to be deleted. Values are of the form
     * `projects/<project>/instances/<instance>/appProfiles/<app_profile>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * If true, ignore safety checks when deleting the app profile.
     *
     * Generated from protobuf field <code>bool ignore_warnings = 2;</code>
     */
    private $ignore_warnings = false;

    public function __construct() {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableInstanceAdmin::initOnce();
        parent::__construct();
    }

    /**
     * The unique name of the app profile to be deleted. Values are of the form
     * `projects/<project>/instances/<instance>/appProfiles/<app_profile>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The unique name of the app profile to be deleted. Values are of the form
     * `projects/<project>/instances/<instance>/appProfiles/<app_profile>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * If true, ignore safety checks when deleting the app profile.
     *
     * Generated from protobuf field <code>bool ignore_warnings = 2;</code>
     * @return bool
     */
    public function getIgnoreWarnings()
    {
        return $this->ignore_warnings;
    }

    /**
     * If true, ignore safety checks when deleting the app profile.
     *
     * Generated from protobuf field <code>bool ignore_warnings = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setIgnoreWarnings($var)
    {
        GPBUtil::checkBool($var);
        $this->ignore_warnings = $var;

        return $this;
    }

}

