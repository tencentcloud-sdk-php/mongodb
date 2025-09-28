<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RestartNodes请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
 * @method array getNodeIds() 获取需要重启的节点 ID 列表。
- 支持重启的节点类型包含：mongod节点、只读节点、mongos节点。
- 节点 ID，请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在**节点管理**页面复制，或者通过 [DescribeDBInstanceNodeProperty ](https://cloud.tencent.com/document/product/240/82022)接口获取。
 * @method void setNodeIds(array $NodeIds) 设置需要重启的节点 ID 列表。
- 支持重启的节点类型包含：mongod节点、只读节点、mongos节点。
- 节点 ID，请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在**节点管理**页面复制，或者通过 [DescribeDBInstanceNodeProperty ](https://cloud.tencent.com/document/product/240/82022)接口获取。
 */
class RestartNodesRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
     */
    public $InstanceId;

    /**
     * @var array 需要重启的节点 ID 列表。
- 支持重启的节点类型包含：mongod节点、只读节点、mongos节点。
- 节点 ID，请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在**节点管理**页面复制，或者通过 [DescribeDBInstanceNodeProperty ](https://cloud.tencent.com/document/product/240/82022)接口获取。
     */
    public $NodeIds;

    /**
     * @param string $InstanceId 实例 ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
     * @param array $NodeIds 需要重启的节点 ID 列表。
- 支持重启的节点类型包含：mongod节点、只读节点、mongos节点。
- 节点 ID，请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在**节点管理**页面复制，或者通过 [DescribeDBInstanceNodeProperty ](https://cloud.tencent.com/document/product/240/82022)接口获取。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("NodeIds",$param) and $param["NodeIds"] !== null) {
            $this->NodeIds = $param["NodeIds"];
        }
    }
}
