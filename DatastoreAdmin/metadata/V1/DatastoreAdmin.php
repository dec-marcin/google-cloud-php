<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/admin/v1/datastore_admin.proto

namespace GPBMetadata\Google\Datastore\Admin\V1;

class DatastoreAdmin
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Datastore\Admin\V1\Index::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa41d0a2f676f6f676c652f6461746173746f72652f61646d696e2f76312f6461746173746f72655f61646d696e2e70726f746f1219676f6f676c652e6461746173746f72652e61646d696e2e76311a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a25676f6f676c652f6461746173746f72652f61646d696e2f76312f696e6465782e70726f746f1a23676f6f676c652f6c6f6e6772756e6e696e672f6f7065726174696f6e732e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f22f4030a0e436f6d6d6f6e4d65746164617461122e0a0a73746172745f74696d6518012001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70122c0a08656e645f74696d6518022001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012400a0e6f7065726174696f6e5f7479706518032001280e32282e676f6f676c652e6461746173746f72652e61646d696e2e76312e4f7065726174696f6e5479706512450a066c6162656c7318042003280b32352e676f6f676c652e6461746173746f72652e61646d696e2e76312e436f6d6d6f6e4d657461646174612e4c6162656c73456e747279123e0a05737461746518052001280e322f2e676f6f676c652e6461746173746f72652e61646d696e2e76312e436f6d6d6f6e4d657461646174612e53746174651a2d0a0b4c6162656c73456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a023801228b010a05537461746512150a1153544154455f554e535045434946494544100012100a0c494e495449414c495a494e471001120e0a0a50524f43455353494e471002120e0a0a43414e43454c4c494e471003120e0a0a46494e414c495a494e471004120e0a0a5355434345535346554c1005120a0a064641494c45441006120d0a0943414e43454c4c45441007223a0a0850726f677265737312160a0e776f726b5f636f6d706c6574656418012001280312160a0e776f726b5f657374696d61746564180220012803228d020a154578706f7274456e7469746965735265717565737412170a0a70726f6a6563745f69641801200128094203e04102124c0a066c6162656c7318022003280b323c2e676f6f676c652e6461746173746f72652e61646d696e2e76312e4578706f7274456e746974696573526571756573742e4c6162656c73456e747279123e0a0d656e746974795f66696c74657218032001280b32272e676f6f676c652e6461746173746f72652e61646d696e2e76312e456e7469747946696c746572121e0a116f75747075745f75726c5f7072656669781804200128094203e041021a2d0a0b4c6162656c73456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a0238012285020a15496d706f7274456e7469746965735265717565737412170a0a70726f6a6563745f69641801200128094203e04102124c0a066c6162656c7318022003280b323c2e676f6f676c652e6461746173746f72652e61646d696e2e76312e496d706f7274456e746974696573526571756573742e4c6162656c73456e74727912160a09696e7075745f75726c1803200128094203e04102123e0a0d656e746974795f66696c74657218042001280b32272e676f6f676c652e6461746173746f72652e61646d696e2e76312e456e7469747946696c7465721a2d0a0b4c6162656c73456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a023801222c0a164578706f7274456e746974696573526573706f6e736512120a0a6f75747075745f75726c18012001280922ab020a164578706f7274456e7469746965734d6574616461746112390a06636f6d6d6f6e18012001280b32292e676f6f676c652e6461746173746f72652e61646d696e2e76312e436f6d6d6f6e4d65746164617461123e0a1170726f67726573735f656e74697469657318022001280b32232e676f6f676c652e6461746173746f72652e61646d696e2e76312e50726f6772657373123b0a0e70726f67726573735f627974657318032001280b32232e676f6f676c652e6461746173746f72652e61646d696e2e76312e50726f6772657373123e0a0d656e746974795f66696c74657218042001280b32272e676f6f676c652e6461746173746f72652e61646d696e2e76312e456e7469747946696c74657212190a116f75747075745f75726c5f70726566697818052001280922a3020a16496d706f7274456e7469746965734d6574616461746112390a06636f6d6d6f6e18012001280b32292e676f6f676c652e6461746173746f72652e61646d696e2e76312e436f6d6d6f6e4d65746164617461123e0a1170726f67726573735f656e74697469657318022001280b32232e676f6f676c652e6461746173746f72652e61646d696e2e76312e50726f6772657373123b0a0e70726f67726573735f627974657318032001280b32232e676f6f676c652e6461746173746f72652e61646d696e2e76312e50726f6772657373123e0a0d656e746974795f66696c74657218042001280b32272e676f6f676c652e6461746173746f72652e61646d696e2e76312e456e7469747946696c74657212110a09696e7075745f75726c18052001280922340a0c456e7469747946696c746572120d0a056b696e647318012003280912150a0d6e616d6573706163655f69647318022003280922370a0f476574496e6465785265717565737412120a0a70726f6a6563745f696418012001280912100a08696e6465785f6964180320012809225f0a124c697374496e64657865735265717565737412120a0a70726f6a6563745f6964180120012809120e0a0666696c74657218032001280912110a09706167655f73697a6518042001280512120a0a706167655f746f6b656e18052001280922610a134c697374496e6465786573526573706f6e736512310a07696e646578657318012003280b32202e676f6f676c652e6461746173746f72652e61646d696e2e76312e496e64657812170a0f6e6578745f706167655f746f6b656e18022001280922a5010a16496e6465784f7065726174696f6e4d6574616461746112390a06636f6d6d6f6e18012001280b32292e676f6f676c652e6461746173746f72652e61646d696e2e76312e436f6d6d6f6e4d65746164617461123e0a1170726f67726573735f656e74697469657318022001280b32232e676f6f676c652e6461746173746f72652e61646d696e2e76312e50726f677265737312100a08696e6465785f69641803200128092a7d0a0d4f7065726174696f6e54797065121e0a1a4f5045524154494f4e5f545950455f554e535045434946494544100012130a0f4558504f52545f454e544954494553100112130a0f494d504f52545f454e544954494553100212100a0c4352454154455f494e444558100312100a0c44454c4554455f494e4445581004329c070a0e4461746173746f726541646d696e12f6010a0e4578706f7274456e74697469657312302e676f6f676c652e6461746173746f72652e61646d696e2e76312e4578706f7274456e746974696573526571756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f7065726174696f6e22920182d3e493022522202f76312f70726f6a656374732f7b70726f6a6563745f69647d3a6578706f72743a012ada413170726f6a6563745f69642c6c6162656c732c656e746974795f66696c7465722c6f75747075745f75726c5f707265666978ca41300a164578706f7274456e746974696573526573706f6e736512164578706f7274456e7469746965734d6574616461746112ed010a0e496d706f7274456e74697469657312302e676f6f676c652e6461746173746f72652e61646d696e2e76312e496d706f7274456e746974696573526571756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f7065726174696f6e22890182d3e493022522202f76312f70726f6a656374732f7b70726f6a6563745f69647d3a696d706f72743a012ada412970726f6a6563745f69642c6c6162656c732c696e7075745f75726c2c656e746974795f66696c746572ca412f0a15676f6f676c652e70726f746f6275662e456d7074791216496d706f7274456e7469746965734d65746164617461128e010a08476574496e646578122a2e676f6f676c652e6461746173746f72652e61646d696e2e76312e476574496e646578526571756573741a202e676f6f676c652e6461746173746f72652e61646d696e2e76312e496e646578223482d3e493022e122c2f76312f70726f6a656374732f7b70726f6a6563745f69647d2f696e64657865732f7b696e6465785f69647d1297010a0b4c697374496e6465786573122d2e676f6f676c652e6461746173746f72652e61646d696e2e76312e4c697374496e6465786573526571756573741a2e2e676f6f676c652e6461746173746f72652e61646d696e2e76312e4c697374496e6465786573526573706f6e7365222982d3e493022312212f76312f70726f6a656374732f7b70726f6a6563745f69647d2f696e64657865731a76ca41186461746173746f72652e676f6f676c65617069732e636f6dd2415868747470733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f636c6f75642d706c6174666f726d2c68747470733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f6461746173746f726542e0010a1d636f6d2e676f6f676c652e6461746173746f72652e61646d696e2e763142134461746173746f726541646d696e50726f746f50015a3e676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6461746173746f72652f61646d696e2f76313b61646d696eaa021f476f6f676c652e436c6f75642e4461746173746f72652e41646d696e2e5631ca021f476f6f676c655c436c6f75645c4461746173746f72655c41646d696e5c5631ea0223476f6f676c653a3a436c6f75643a3a4461746173746f72653a3a41646d696e3a3a5631620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
