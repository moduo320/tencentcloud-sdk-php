<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getDomainName() 获取推流域名。
 * @method void setDomainName(string $DomainName) 设置推流域名。
 * @method string getAppName() 获取推流路径。
 * @method void setAppName(string $AppName) 设置推流路径。
 * @method string getStreamName() 获取流名称。
 * @method void setStreamName(string $StreamName) 设置流名称。
 * @method integer getTemplateId() 获取水印Id，即调用[AddLiveWatermark](/document/product/267/30154)接口返回的WatermarkId。
 * @method void setTemplateId(integer $TemplateId) 设置水印Id，即调用[AddLiveWatermark](/document/product/267/30154)接口返回的WatermarkId。
 */

/**
 *CreateLiveWatermarkRule请求参数结构体
 */
class CreateLiveWatermarkRuleRequest extends AbstractModel
{
    /**
     * @var string 推流域名。
     */
    public $DomainName;

    /**
     * @var string 推流路径。
     */
    public $AppName;

    /**
     * @var string 流名称。
     */
    public $StreamName;

    /**
     * @var integer 水印Id，即调用[AddLiveWatermark](/document/product/267/30154)接口返回的WatermarkId。
     */
    public $TemplateId;
    /**
     * @param string $DomainName 推流域名。
     * @param string $AppName 推流路径。
     * @param string $StreamName 流名称。
     * @param integer $TemplateId 水印Id，即调用[AddLiveWatermark](/document/product/267/30154)接口返回的WatermarkId。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }
    }
}