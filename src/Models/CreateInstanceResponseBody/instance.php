<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\CreateInstanceResponseBody;

use AlibabaCloud\SDK\CCC\V20170705\Models\CreateInstanceResponseBody\instance\admin;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateInstanceResponseBody\instance\failLoginNames;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateInstanceResponseBody\instance\failPhoneNumbers;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateInstanceResponseBody\instance\phoneNumbers;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateInstanceResponseBody\instance\successLoginNames;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateInstanceResponseBody\instance\successPhoneNumbers;
use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @var admin
     */
    public $admin;

    /**
     * @var string
     */
    public $consoleUrl;

    /**
     * @var int
     */
    public $createdTime;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var failLoginNames
     */
    public $failLoginNames;

    /**
     * @var failPhoneNumbers
     */
    public $failPhoneNumbers;

    /**
     * @var string
     */
    public $instanceDescription;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $maxOnlineAgents;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var phoneNumbers
     */
    public $phoneNumbers;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storageBucket;

    /**
     * @var int
     */
    public $storageMaxDays;

    /**
     * @var int
     */
    public $storageMaxSize;

    /**
     * @var successLoginNames
     */
    public $successLoginNames;

    /**
     * @var successPhoneNumbers
     */
    public $successPhoneNumbers;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'admin'               => 'Admin',
        'consoleUrl'          => 'ConsoleUrl',
        'createdTime'         => 'CreatedTime',
        'directoryId'         => 'DirectoryId',
        'domainName'          => 'DomainName',
        'failLoginNames'      => 'FailLoginNames',
        'failPhoneNumbers'    => 'FailPhoneNumbers',
        'instanceDescription' => 'InstanceDescription',
        'instanceId'          => 'InstanceId',
        'instanceName'        => 'InstanceName',
        'maxOnlineAgents'     => 'MaxOnlineAgents',
        'owner'               => 'Owner',
        'phoneNumbers'        => 'PhoneNumbers',
        'status'              => 'Status',
        'storageBucket'       => 'StorageBucket',
        'storageMaxDays'      => 'StorageMaxDays',
        'storageMaxSize'      => 'StorageMaxSize',
        'successLoginNames'   => 'SuccessLoginNames',
        'successPhoneNumbers' => 'SuccessPhoneNumbers',
        'tenantId'            => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->admin) {
            $res['Admin'] = null !== $this->admin ? $this->admin->toMap() : null;
        }
        if (null !== $this->consoleUrl) {
            $res['ConsoleUrl'] = $this->consoleUrl;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->failLoginNames) {
            $res['FailLoginNames'] = null !== $this->failLoginNames ? $this->failLoginNames->toMap() : null;
        }
        if (null !== $this->failPhoneNumbers) {
            $res['FailPhoneNumbers'] = null !== $this->failPhoneNumbers ? $this->failPhoneNumbers->toMap() : null;
        }
        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->maxOnlineAgents) {
            $res['MaxOnlineAgents'] = $this->maxOnlineAgents;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->phoneNumbers) {
            $res['PhoneNumbers'] = null !== $this->phoneNumbers ? $this->phoneNumbers->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storageBucket) {
            $res['StorageBucket'] = $this->storageBucket;
        }
        if (null !== $this->storageMaxDays) {
            $res['StorageMaxDays'] = $this->storageMaxDays;
        }
        if (null !== $this->storageMaxSize) {
            $res['StorageMaxSize'] = $this->storageMaxSize;
        }
        if (null !== $this->successLoginNames) {
            $res['SuccessLoginNames'] = null !== $this->successLoginNames ? $this->successLoginNames->toMap() : null;
        }
        if (null !== $this->successPhoneNumbers) {
            $res['SuccessPhoneNumbers'] = null !== $this->successPhoneNumbers ? $this->successPhoneNumbers->toMap() : null;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Admin'])) {
            $model->admin = admin::fromMap($map['Admin']);
        }
        if (isset($map['ConsoleUrl'])) {
            $model->consoleUrl = $map['ConsoleUrl'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['FailLoginNames'])) {
            $model->failLoginNames = failLoginNames::fromMap($map['FailLoginNames']);
        }
        if (isset($map['FailPhoneNumbers'])) {
            $model->failPhoneNumbers = failPhoneNumbers::fromMap($map['FailPhoneNumbers']);
        }
        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['MaxOnlineAgents'])) {
            $model->maxOnlineAgents = $map['MaxOnlineAgents'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['PhoneNumbers'])) {
            $model->phoneNumbers = phoneNumbers::fromMap($map['PhoneNumbers']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StorageBucket'])) {
            $model->storageBucket = $map['StorageBucket'];
        }
        if (isset($map['StorageMaxDays'])) {
            $model->storageMaxDays = $map['StorageMaxDays'];
        }
        if (isset($map['StorageMaxSize'])) {
            $model->storageMaxSize = $map['StorageMaxSize'];
        }
        if (isset($map['SuccessLoginNames'])) {
            $model->successLoginNames = successLoginNames::fromMap($map['SuccessLoginNames']);
        }
        if (isset($map['SuccessPhoneNumbers'])) {
            $model->successPhoneNumbers = successPhoneNumbers::fromMap($map['SuccessPhoneNumbers']);
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
