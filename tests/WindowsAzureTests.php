<?php

/**
 * LICENSE: Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * http://www.apache.org/licenses/LICENSE-2.0.
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * PHP version 5
 *
 * @category  Microsoft
 *
 * @author    Azure PHP SDK <azurephpsdk@microsoft.com>
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 *
 * @link      https://github.com/windowsazure/azure-sdk-for-php
 * @deprecated since version 0.4.2 , to be removed in 0.5.0. Please use `vendor/autoload.php` instead.
 */
trigger_error(sprintf('Usage of `%s` has been deprecated since version 0.4.2 and will be removed in 0.5.0. '.
   'Please use `vendor/autoload.php` instead, which is generated during the install process by Composer.', __FILE__), E_USER_DEPRECATED);

require dirname(__DIR__).'/vendor/autoload.php';

spl_autoload_register(
   function ($class) {
      static $classes = null;
      if ($classes === null) {
          $classes = [
            'tests\\framework\\blobservicerestproxytestbase' => '/framework/BlobServiceRestProxyTestBase.php',
            'tests\\framework\\fiddlerfilter' => '/framework/FiddlerFilter.php',
            'tests\\framework\\queueservicerestproxytestbase' => '/framework/QueueServiceRestProxyTestBase.php',
            'tests\\framework\\restproxytestbase' => '/framework/RestProxyTestBase.php',
            'tests\\framework\\servicebusrestproxytestbase' => '/framework/ServiceBusRestProxyTestBase.php',
            'tests\\framework\\servicemanagementrestproxytestbase' => '/framework/ServiceManagementRestProxyTestBase.php',
            'tests\\framework\\servicerestproxytestbase' => '/framework/ServiceRestProxyTestBase.php',
            'tests\\framework\\tableservicerestproxytestbase' => '/framework/TableServiceRestProxyTestBase.php',
            'tests\\framework\\testresources' => '/framework/TestResources.php',
            'tests\\framework\\virtualfilesystem' => '/framework/VirtualFileSystem.php',
            'tests\\functional\\windowsazure\\blobservicefunctionaltestdata' => '/functional/WindowsAzure/BlobServiceFunctionalTestData.php',
             'tests\\functional\\windowsazure\\servicebus\\brokerpropertiesmappertest' => '/functional/WindowsAzure/ServiceBus/BrokerPropertiesMapperTest.php',
            'tests\\functional\\windowsazure\\servicebus\\custompropertiesmappertest' => '/functional/WindowsAzure/ServiceBus/CustomPropertiesMapperTest.php',
            'tests\\functional\\windowsazure\\servicebus\\integrationtestbase' => '/functional/WindowsAzure/ServiceBus/IntegrationTestBase.php',
            'tests\\functional\\windowsazure\\servicebus\\scenariotestbase' => '/functional/WindowsAzure/ServiceBus/ScenarioTestBase.php',
            'tests\\functional\\windowsazure\\servicebus\\servicebusintegrationtest' => '/functional/WindowsAzure/ServiceBus/ServiceBusIntegrationTest.php',
            'tests\\functional\\windowsazure\\servicebus\\servicebusqueuetest' => '/functional/WindowsAzure/ServiceBus/ServiceBusQueueTest.php',
            'tests\\functional\\windowsazure\\servicebus\\servicebustopictest' => '/functional/WindowsAzure/ServiceBus/ServiceBusTopicTest.php',
            'tests\\functional\\windowsazure\\servicebus\\wraptokenmanagertest' => '/functional/WindowsAzure/ServiceBus/WrapTokenManagerTest.php',
            'tests\\mock\\windowsazure\\common\\internal\\authentication\\oauthschememock' => '/mock/WindowsAzure/Common/Internal/Authentication/OAuthSchemeMock.php',
            'tests\\mock\\windowsazure\\common\\internal\\authentication\\sharedkeyauthschememock' => '/mock/WindowsAzure/Common/Internal/Authentication/SharedKeyAuthSchemeMock.php',
            'tests\\mock\\windowsazure\\common\\internal\\authentication\\storageauthschememock' => '/mock/WindowsAzure/Common/Internal/Authentication/StorageAuthSchemeMock.php',
            'tests\\mock\\windowsazure\\common\\internal\\authentication\\tablesharedkeyliteauthschememock' => '/mock/WindowsAzure/Common/Internal/Authentication/TableSharedKeyLiteAuthSchemeMock.php',
            'tests\\mock\\windowsazure\\common\\internal\\filters\\simplefiltermock' => '/mock/WindowsAzure/Common/Internal/Filters/SimpleFilterMock.php',
            'tests\\unit\\windowsazure\\common\\cloudconfigurationmanagertest' => '/unit/WindowsAzure/Common/CloudConfigurationManagerTest.php',
            'tests\\unit\\windowsazure\\common\\internal\\atom\\atomlinktest' => '/unit/WindowsAzure/Common/Internal/Atom/AtomLinkTest.php',
            'tests\\unit\\windowsazure\\common\\internal\\atom\\categorytest' => '/unit/WindowsAzure/Common/Internal/Atom/CategoryTest.php',
            'tests\\unit\\windowsazure\\common\\internal\\atom\\contenttest' => '/unit/WindowsAzure/Common/Internal/Atom/ContentTest.php',
            'tests\\unit\\windowsazure\\common\\internal\\atom\\entrytest' => '/unit/WindowsAzure/Common/Internal/Atom/EntryTest.php',
            'tests\\unit\\windowsazure\\common\\internal\\atom\\feedtest' => '/unit/WindowsAzure/Common/Internal/Atom/FeedTest.php',
            'tests\\unit\\windowsazure\\common\\internal\\atom\\generatortest' => '/unit/WindowsAzure/Common/Internal/Atom/GeneratorTest.php',
            'tests\\unit\\windowsazure\\common\\internal\\atom\\persontest' => '/unit/WindowsAzure/Common/Internal/Atom/PersonTest.php',
            'tests\\unit\\windowsazure\\common\\internal\\atom\\sourcetest' => '/unit/WindowsAzure/Common/Internal/Atom/SourceTest.php',
            'tests\\unit\\windowsazure\\common\\internal\\authentication\\oauthschemetest' => '/unit/WindowsAzure/Common/Internal/Authentication/OAuthSchemeTest.php',
            'tests\\unit\\windowsazure\\common\\internal\\authentication\\sharedkeyauthschemetest' => '/unit/WindowsAzure/Common/Internal/Authentication/SharedKeyAuthSchemeTest.php',
            'tests\\unit\\windowsazure\\common\\internal\\authentication\\storageauthschemetest' => '/unit/WindowsAzure/Common/Internal/Authentication/StorageAuthSchemeTest.php',
            'tests\\unit\\windowsazure\\common\\internal\\authentication\\tablesharedkeyliteauthschemetest' => '/unit/WindowsAzure/Common/Internal/Authentication/TableSharedKeyLiteAuthSchemeTest.php',
            'tests\\unit\\windowsazure\\common\\internal\\connectionstringparsertest' => '/unit/WindowsAzure/Common/Internal/ConnectionStringParserTest.php',
            'tests\\unit\\windowsazure\\common\\internal\\connectionstringsourcetest' => '/unit/WindowsAzure/Common/Internal/ConnectionStringSourceTest.php',
            'tests\\unit\\windowsazure\\common\\internal\\filters\\authenticationfiltertest' => '/unit/WindowsAzure/Common/Internal/Filters/AuthenticationFilterTest.php',
            'tests\\unit\\windowsazure\\common\\internal\\filters\\datefiltertest' => '/unit/WindowsAzure/Common/Internal/Filters/DateFilterTest.php',
            'tests\\unit\\windowsazure\\common\\internal\\filters\\headersfiltertest' => '/unit/WindowsAzure/Common/Internal/Filters/HeadersFilterTest.php',
            'tests\\unit\\windowsazure\\common\\internal\\filters\\wrapfiltertest' => '/unit/WindowsAzure/Common/Internal/Filters/WrapFilterTest.php',
            'tests\\unit\\windowsazure\\common\\internal\\http\\batchrequesttest' => '/unit/WindowsAzure/Common/Internal/Http/BatchRequestTest.php',
            'tests\\unit\\windowsazure\\common\\internal\\http\\batchresponsetest' => '/unit/WindowsAzure/Common/Internal/Http/BatchResponseTest.php',
            'tests\\unit\\windowsazure\\common\\internal\\http\\httpcallcontexttest' => '/unit/WindowsAzure/Common/Internal/Http/HttpCallContextTest.php',
            'tests\\unit\\windowsazure\\common\\internal\\http\\httpclienttest' => '/unit/WindowsAzure/Common/Internal/Http/HttpClientTest.php',
            'tests\\unit\\windowsazure\\common\\internal\\http\\urltest' => '/unit/WindowsAzure/Common/Internal/Http/UrlTest.php',
            'tests\\unit\\windowsazure\\common\\internal\\invalidargumenttypeexceptiontest' => '/unit/WindowsAzure/Common/Internal/InvalidArgumentTypeExceptionTest.php',
            'tests\\unit\\windowsazure\\common\\internal\\loggertest' => '/unit/WindowsAzure/Common/Internal/LoggerTest.php',
            'tests\\unit\\windowsazure\\common\\internal\\oauthrestproxytest' => '/unit/WindowsAzure/Common/Internal/OAuthRestProxyTest.php',
            'tests\\unit\\windowsazure\\common\\internal\\serialization\\dummyclass' => '/unit/WindowsAzure/Common/Internal/Serialization/DummyClass.php',
            'tests\\unit\\windowsazure\\common\\internal\\serialization\\jsonserializertest' => '/unit/WindowsAzure/Common/Internal/Serialization/JsonSerializerTest.php',
            'tests\\unit\\windowsazure\\common\\internal\\serialization\\xmlserializertest' => '/unit/WindowsAzure/Common/Internal/Serialization/XmlSerializerTest.php',
            'tests\\unit\\windowsazure\\common\\internal\\servicebussettingstest' => '/unit/WindowsAzure/Common/Internal/ServiceBusSettingsTest.php',
            'tests\\unit\\windowsazure\\common\\internal\\servicemanagementsettingstest' => '/unit/WindowsAzure/Common/Internal/ServiceManagementSettingsTest.php',
            'tests\\unit\\windowsazure\\common\\internal\\servicerestproxytest' => '/unit/WindowsAzure/Common/Internal/ServiceRestProxyTest.php',
            'tests\\unit\\windowsazure\\common\\internal\\storageservicesettingstest' => '/unit/WindowsAzure/Common/Internal/StorageServiceSettingsTest.php',
            'tests\\unit\\windowsazure\\common\\internal\\utilitiestest' => '/unit/WindowsAzure/Common/Internal/UtilitiesTest.php',
            'tests\\unit\\windowsazure\\common\\internal\\validatetest' => '/unit/WindowsAzure/Common/Internal/ValidateTest.php',
            'tests\\unit\\windowsazure\\common\\models\\getservicepropertiesresulttest' => '/unit/WindowsAzure/Common/Models/GetServicePropertiesResultTest.php',
            'tests\\unit\\windowsazure\\common\\models\\loggingtest' => '/unit/WindowsAzure/Common/Models/LoggingTest.php',
            'tests\\unit\\windowsazure\\common\\models\\metricstest' => '/unit/WindowsAzure/Common/Models/MetricsTest.php',
            'tests\\unit\\windowsazure\\common\\models\\oauthaccesstokentest' => '/unit/WindowsAzure/Common/Models/OAuthAccessTokenTest.php',
            'tests\\unit\\windowsazure\\common\\models\\retentionpolicytest' => '/unit/WindowsAzure/Common/Models/RetentionPolicyTest.php',
            'tests\\unit\\windowsazure\\common\\models\\servicepropertiestest' => '/unit/WindowsAzure/Common/Models/ServicePropertiesTest.php',
            'tests\\unit\\windowsazure\\common\\serviceexceptiontest' => '/unit/WindowsAzure/Common/ServiceExceptionTest.php',
            'tests\\unit\\windowsazure\\common\\servicesbuildertest' => '/unit/WindowsAzure/Common/ServicesBuilderTest.php',
            'tests\\unit\\windowsazure\\servicebus\\internal\\actiontest' => '/unit/WindowsAzure/ServiceBus/Internal/ActionTest.php',
            'tests\\unit\\windowsazure\\servicebus\\internal\\activetokentest' => '/unit/WindowsAzure/ServiceBus/Internal/ActiveTokenTest.php',
            'tests\\unit\\windowsazure\\servicebus\\internal\\filtertest' => '/unit/WindowsAzure/ServiceBus/Internal/FilterTest.php',
            'tests\\unit\\windowsazure\\servicebus\\internal\\wraptokenmanagertest' => '/unit/WindowsAzure/ServiceBus/Internal/WrapTokenManagerTest.php',
            'tests\\unit\\windowsazure\\servicebus\\models\\brokeredmessagetest' => '/unit/WindowsAzure/ServiceBus/models/BrokeredMessageTest.php',
            'tests\\unit\\windowsazure\\servicebus\\models\\brokerpropertiestest' => '/unit/WindowsAzure/ServiceBus/models/BrokerPropertiesTest.php',
            'tests\\unit\\windowsazure\\servicebus\\models\\correlationfiltertest' => '/unit/WindowsAzure/ServiceBus/models/CorrelationFilterTest.php',
            'tests\\unit\\windowsazure\\servicebus\\models\\emptyruleactiontest' => '/unit/WindowsAzure/ServiceBus/models/EmptyRuleActionTest.php',
            'tests\\unit\\windowsazure\\servicebus\\models\\falsefiltertest' => '/unit/WindowsAzure/ServiceBus/models/FalseFilterTest.php',
            'tests\\unit\\windowsazure\\servicebus\\models\\listoptionstest' => '/unit/WindowsAzure/ServiceBus/models/ListOptionsTest.php',
            'tests\\unit\\windowsazure\\servicebus\\models\\listqueuesoptionstest' => '/unit/WindowsAzure/ServiceBus/models/ListQueuesOptionsTest.php',
            'tests\\unit\\windowsazure\\servicebus\\models\\listqueuesresulttest' => '/unit/WindowsAzure/ServiceBus/models/ListQueuesResultTest.php',
            'tests\\unit\\windowsazure\\servicebus\\models\\listrulesoptionstest' => '/unit/WindowsAzure/ServiceBus/models/ListRulesOptionsTest.php',
            'tests\\unit\\windowsazure\\servicebus\\models\\listrulesresulttest' => '/unit/WindowsAzure/ServiceBus/models/ListRulesResultTest.php',
            'tests\\unit\\windowsazure\\servicebus\\models\\listsubscriptionsoptionstest' => '/unit/WindowsAzure/ServiceBus/models/ListSubscriptionsOptionsTest.php',
            'tests\\unit\\windowsazure\\servicebus\\models\\listsubscriptionsresulttest' => '/unit/WindowsAzure/ServiceBus/models/ListSubscriptionsResultTest.php',
            'tests\\unit\\windowsazure\\servicebus\\models\\listtopicsoptionstest' => '/unit/WindowsAzure/ServiceBus/models/ListTopicsOptionsTest.php',
            'tests\\unit\\windowsazure\\servicebus\\models\\listtopicsresulttest' => '/unit/WindowsAzure/ServiceBus/models/ListTopicsResultTest.php',
            'tests\\unit\\windowsazure\\servicebus\\models\\queuedescriptiontest' => '/unit/WindowsAzure/ServiceBus/models/QueueDescriptionTest.php',
            'tests\\unit\\windowsazure\\servicebus\\models\\queueinfotest' => '/unit/WindowsAzure/ServiceBus/models/QueueInfoTest.php',
            'tests\\unit\\windowsazure\\servicebus\\models\\receivemessageoptionstest' => '/unit/WindowsAzure/ServiceBus/models/ReceiveMessageOptionsTest.php',
            'tests\\unit\\windowsazure\\servicebus\\models\\ruledescriptiontest' => '/unit/WindowsAzure/ServiceBus/models/RuleDescriptionTest.php',
            'tests\\unit\\windowsazure\\servicebus\\models\\ruleinfotest' => '/unit/WindowsAzure/ServiceBus/models/RuleInfoTest.php',
            'tests\\unit\\windowsazure\\servicebus\\models\\sqlfiltertest' => '/unit/WindowsAzure/ServiceBus/models/SqlFilterTest.php',
            'tests\\unit\\windowsazure\\servicebus\\models\\sqlruleactiontest' => '/unit/WindowsAzure/ServiceBus/models/SqlRuleActionTest.php',
            'tests\\unit\\windowsazure\\servicebus\\models\\subscriptiondescriptiontest' => '/unit/WindowsAzure/ServiceBus/models/SubscriptionDescriptionTest.php',
            'tests\\unit\\windowsazure\\servicebus\\models\\subscriptioninfotest' => '/unit/WindowsAzure/ServiceBus/models/SubscriptionInfoTest.php',
            'tests\\unit\\windowsazure\\servicebus\\models\\topicdescriptiontest' => '/unit/WindowsAzure/ServiceBus/models/TopicDescriptionTest.php',
            'tests\\unit\\windowsazure\\servicebus\\models\\topicinfotest' => '/unit/WindowsAzure/ServiceBus/models/TopicInfoTest.php',
            'tests\\unit\\windowsazure\\servicebus\\models\\truefiltertest' => '/unit/WindowsAzure/ServiceBus/models/TrueFilterTest.php',
            'tests\\unit\\windowsazure\\servicebus\\models\\wrapaccesstokenresulttest' => '/unit/WindowsAzure/ServiceBus/models/WrapAccessTokenResultTest.php',
            'tests\\unit\\windowsazure\\servicebus\\servicebusrestproxytest' => '/unit/WindowsAzure/ServiceBus/ServiceBusRestProxyTest.php',
            'tests\\unit\\windowsazure\\servicebus\\wraprestproxytest' => '/unit/WindowsAzure/ServiceBus/WrapRestProxyTest.php',
            'tests\\unit\\windowsazure\\servicemanagement\\internal\\servicetest' => '/unit/WindowsAzure/ServiceManagement/Internal/ServiceTest.php',
            'tests\\unit\\windowsazure\\servicemanagement\\internal\\windowsazureservicetest' => '/unit/WindowsAzure/ServiceManagement/Internal/WindowsAzureServiceTest.php',
            'tests\\unit\\windowsazure\\servicemanagement\\models\\affinitygrouptest' => '/unit/WindowsAzure/ServiceManagement/Models/AffinityGroupTest.php',
            'tests\\unit\\windowsazure\\servicemanagement\\models\\asynchronousoperationresulttest' => '/unit/WindowsAzure/ServiceManagement/Models/AsynchronousOperationResultTest.php',
            'tests\\unit\\windowsazure\\servicemanagement\\models\\changedeploymentconfigurationoptionstest' => '/unit/WindowsAzure/ServiceManagement/Models/ChangeDeploymentConfigurationOptionsTest.php',
            'tests\\unit\\windowsazure\\servicemanagement\\models\\createaffinitygroupoptionstest' => '/unit/WindowsAzure/ServiceManagement/Models/CreateAffinityGroupOptionsTest.php',
            'tests\\unit\\windowsazure\\servicemanagement\\models\\createdeploymentoptionstest' => '/unit/WindowsAzure/ServiceManagement/Models/CreateDeploymentOptionsTest.php',
            'tests\\unit\\windowsazure\\servicemanagement\\models\\createstorageserviceoptionstest' => '/unit/WindowsAzure/ServiceManagement/Models/CreateStorageServiceOptionsTest.php',
            'tests\\unit\\windowsazure\\servicemanagement\\models\\deploymentslottest' => '/unit/WindowsAzure/ServiceManagement/Models/DeploymentSlotTest.php',
            'tests\\unit\\windowsazure\\servicemanagement\\models\\deploymentstatustest' => '/unit/WindowsAzure/ServiceManagement/Models/DeploymentStatusTest.php',
            'tests\\unit\\windowsazure\\servicemanagement\\models\\deploymenttest' => '/unit/WindowsAzure/ServiceManagement/Models/DeploymentTest.php',
            'tests\\unit\\windowsazure\\servicemanagement\\models\\getaffinitygrouppropertiesresulttest' => '/unit/WindowsAzure/ServiceManagement/Models/GetAffinityGroupPropertiesResultTest.php',
            'tests\\unit\\windowsazure\\servicemanagement\\models\\getdeploymentoptionstest' => '/unit/WindowsAzure/ServiceManagement/Models/GetDeploymentOptionsTest.php',
            'tests\\unit\\windowsazure\\servicemanagement\\models\\getdeploymentresulttest' => '/unit/WindowsAzure/ServiceManagement/Models/GetDeploymentResultTest.php',
            'tests\\unit\\windowsazure\\servicemanagement\\models\\gethostedservicepropertiesoptionstest' => '/unit/WindowsAzure/ServiceManagement/Models/GetHostedServicePropertiesOptionsTest.php',
            'tests\\unit\\windowsazure\\servicemanagement\\models\\gethostedservicepropertiesresulttest' => '/unit/WindowsAzure/ServiceManagement/Models/GetHostedServicePropertiesResultTest.php',
            'tests\\unit\\windowsazure\\servicemanagement\\models\\getoperationstatusresulttest' => '/unit/WindowsAzure/ServiceManagement/Models/GetOperationStatusResultTest.php',
            'tests\\unit\\windowsazure\\servicemanagement\\models\\getstorageservicekeysresulttest' => '/unit/WindowsAzure/ServiceManagement/Models/GetStorageServiceKeysResultTest.php',
            'tests\\unit\\windowsazure\\servicemanagement\\models\\getstorageservicepropertiesresulttest' => '/unit/WindowsAzure/ServiceManagement/Models/GetStorageServicePropertiesResultTest.php',
            'tests\\unit\\windowsazure\\servicemanagement\\models\\hostedservicetest' => '/unit/WindowsAzure/ServiceManagement/Models/HostedServiceTest.php',
            'tests\\unit\\windowsazure\\servicemanagement\\models\\inputendpointtest' => '/unit/WindowsAzure/ServiceManagement/Models/InputEndpointTest.php',
            'tests\\unit\\windowsazure\\servicemanagement\\models\\listaffinitygroupsresulttest' => '/unit/WindowsAzure/ServiceManagement/Models/ListAffinityGroupsResultTest.php',
            'tests\\unit\\windowsazure\\servicemanagement\\models\\listhostedservicesresulttest' => '/unit/WindowsAzure/ServiceManagement/Models/ListHostedServicesResultTest.php',
            'tests\\unit\\windowsazure\\servicemanagement\\models\\listlocationsresulttest' => '/unit/WindowsAzure/ServiceManagement/Models/ListLocationsResultTest.php',
            'tests\\unit\\windowsazure\\servicemanagement\\models\\liststorageservicesresulttest' => '/unit/WindowsAzure/ServiceManagement/Models/ListStorageServicesResultTest.php',
            'tests\\unit\\windowsazure\\servicemanagement\\models\\locationtest' => '/unit/WindowsAzure/ServiceManagement/Models/LocationTest.php',
            'tests\\unit\\windowsazure\\servicemanagement\\models\\modetest' => '/unit/WindowsAzure/ServiceManagement/Models/ModeTest.php',
            'tests\\unit\\windowsazure\\servicemanagement\\models\\roleinstancetest' => '/unit/WindowsAzure/ServiceManagement/Models/RoleInstanceTest.php',
            'tests\\unit\\windowsazure\\servicemanagement\\models\\roletest' => '/unit/WindowsAzure/ServiceManagement/Models/RoleTest.php',
            'tests\\unit\\windowsazure\\servicemanagement\\models\\storageservicetest' => '/unit/WindowsAzure/ServiceManagement/Models/StorageServiceTest.php',
            'tests\\unit\\windowsazure\\servicemanagement\\models\\updateserviceoptionstest' => '/unit/WindowsAzure/ServiceManagement/Models/UpdateServiceOptionsTest.php',
            'tests\\unit\\windowsazure\\servicemanagement\\models\\upgradedeploymentoptionstest' => '/unit/WindowsAzure/ServiceManagement/Models/UpgradeDeploymentOptionsTest.php',
            'tests\\unit\\windowsazure\\servicemanagement\\models\\upgradestatustest' => '/unit/WindowsAzure/ServiceManagement/Models/UpgradeStatusTest.php',
            'tests\\unit\\windowsazure\\servicemanagement\\servicemanagementrestproxytest' => '/unit/WindowsAzure/ServiceManagement/ServiceManagementRestProxyTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\internal\\acquirecurrentstatetest' => '/unit/WindowsAzure/ServiceRuntime/Internal/AcquireCurrentStateTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\internal\\chunkedgoalstatedeserializertest' => '/unit/WindowsAzure/ServiceRuntime/Internal/ChunkedGoalStateDeserializerTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\internal\\currentstatetest' => '/unit/WindowsAzure/ServiceRuntime/Internal/CurrentStateTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\internal\\fileinputchanneltest' => '/unit/WindowsAzure/ServiceRuntime/Internal/FileInputChannelTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\internal\\fileoutputchanneltest' => '/unit/WindowsAzure/ServiceRuntime/Internal/FileOutputChannelTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\internal\\goalstatetest' => '/unit/WindowsAzure/ServiceRuntime/Internal/GoalStateTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\internal\\localresourcetest' => '/unit/WindowsAzure/ServiceRuntime/Internal/LocalResourceTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\internal\\protocol1runtimeclientfactorytest' => '/unit/WindowsAzure/ServiceRuntime/Internal/Protocol1RuntimeClientFactoryTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\internal\\protocol1runtimeclienttest' => '/unit/WindowsAzure/ServiceRuntime/Internal/Protocol1RuntimeClientTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\internal\\protocol1runtimecurrentstateclienttest' => '/unit/WindowsAzure/ServiceRuntime/Internal/Protocol1RuntimeCurrentStateClientTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\internal\\protocol1runtimegoalstateclienttest' => '/unit/WindowsAzure/ServiceRuntime/Internal/Protocol1RuntimeGoalStateClientTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\internal\\releasecurrentstatetest' => '/unit/WindowsAzure/ServiceRuntime/Internal/ReleaseCurrentStateTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\internal\\roleenvironmentconfigurationsettingchangetest' => '/unit/WindowsAzure/ServiceRuntime/Internal/RoleEnvironmentConfigurationSettingChangeTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\internal\\roleenvironmentdatatest' => '/unit/WindowsAzure/ServiceRuntime/Internal/RoleEnvironmentDataTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\internal\\roleenvironmenttopologychangetest' => '/unit/WindowsAzure/ServiceRuntime/Internal/RoleEnvironmentTopologyChangeTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\internal\\roleinstanceendpointtest' => '/unit/WindowsAzure/ServiceRuntime/Internal/RoleInstanceEndpointTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\internal\\roleinstancetest' => '/unit/WindowsAzure/ServiceRuntime/Internal/RoleInstanceTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\internal\\roletest' => '/unit/WindowsAzure/ServiceRuntime/Internal/RoleTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\internal\\runtimekerneltest' => '/unit/WindowsAzure/ServiceRuntime/Internal/RuntimeKernelTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\internal\\runtimeversionmanagertest' => '/unit/WindowsAzure/ServiceRuntime/Internal/RuntimeVersionManagerTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\internal\\runtimeversionprotocolclienttest' => '/unit/WindowsAzure/ServiceRuntime/Internal/RuntimeVersionProtocolClientTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\internal\\xmlcurrentstateserializertest' => '/unit/WindowsAzure/ServiceRuntime/Internal/XmlCurrentStateSerializerTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\internal\\xmlgoalstatedeserializertest' => '/unit/WindowsAzure/ServiceRuntime/Internal/XmlGoalStateDeserializerTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\internal\\xmlroleenvironmentdatadeserializertest' => '/unit/WindowsAzure/ServiceRuntime/Internal/XmlRoleEnvironmentDataDeserializerTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\roleenvironmenttest' => '/unit/WindowsAzure/ServiceRuntime/RoleEnvironmentTest.php',
          ];
      }
      $cn = strtolower($class);
      if (isset($classes[$cn])) {
          require __DIR__.$classes[$cn];
      }
   }
);
