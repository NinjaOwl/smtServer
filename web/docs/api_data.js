define({ "api": [
  {
    "type": "post",
    "url": "/v1/app/get",
    "title": "获取最新版本信息",
    "description": "<p>获取最新版本信息</p>",
    "name": "_v1_app_get",
    "group": "app",
    "version": "3.1.0",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "app_token",
            "description": ""
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "app_lang",
            "description": ""
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "app_type",
            "description": ""
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "app_version",
            "description": ""
          }
        ]
      },
      "examples": [
        {
          "title": "Header-Example:",
          "content": "{\n  \"app_token\": \"wVNq2Fcg-zXVcKDYRy_vLq7niv-36As3\",\n  \"app_lang\": \"zh\",\n  \"app_type\": \"smt_client\",\n  \"app_version\": \"2.4.7\",\n}",
          "type": "string"
        }
      ]
    },
    "sampleRequest": [
      {
        "url": "/v1/app/get"
      }
    ],
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "code",
            "description": "<ol start=\"200\"> <li></li> </ol>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "msg",
            "description": "<p>消息</p>"
          },
          {
            "group": "Success 200",
            "type": "json",
            "optional": false,
            "field": "data",
            "description": "<p>数据</p>"
          },
          {
            "group": "Success 200",
            "type": "json",
            "optional": false,
            "field": "data.version",
            "description": "<p>版本</p>"
          },
          {
            "group": "Success 200",
            "type": "int",
            "optional": false,
            "field": "data.version.version_id",
            "description": "<p>版本编号</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "data.version.version_code",
            "description": "<p>版本号</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "data.version.version_content",
            "description": "<p>版本内容</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "data.version.version_url",
            "description": "<p>版本地址</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "data.version.is_force",
            "description": "<p>是否强制</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "正确实例:",
          "content": "\n{\n\"code\": 200,\n\"data\": {\n  'version':{\n  'version_id':,\n  'version_code':\n  'version_content':\n  'version_url':\n  'is_force':\n}\n},\n\"msg\": \"请求成功\"\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "code",
            "description": "<p>错误码<br> 0：系统错误<br></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "msg",
            "description": "<p>错误消息</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "错误实例:",
          "content": "{\n\"code\": \"0\",\n\"msg\": \"服务繁忙\",\n\"data\": []\n}",
          "type": "json"
        }
      ]
    },
    "filename": "modules/v1/controllers/AppController.php",
    "groupTitle": "app"
  },
  {
    "type": "post",
    "url": "/v1/auth/get",
    "title": "获取登录信息",
    "description": "<p>获取登录信息</p>",
    "name": "_auth_auth_get",
    "group": "auth",
    "version": "3.1.0",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "app_token",
            "description": ""
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "app_lang",
            "description": ""
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "app_type",
            "description": ""
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "app_version",
            "description": ""
          }
        ]
      },
      "examples": [
        {
          "title": "Header-Example:",
          "content": "{\n  \"app_token\": \"wVNq2Fcg-zXVcKDYRy_vLq7niv-36As3\",\n  \"app_lang\": \"zh\",\n  \"app_type\": \"smt_client\",\n  \"app_version\": \"2.4.7\",\n}",
          "type": "string"
        }
      ]
    },
    "sampleRequest": [
      {
        "url": "/v1/auth/get"
      }
    ],
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "code",
            "description": "<ol start=\"200\"> <li></li> </ol>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "msg",
            "description": "<p>消息</p>"
          },
          {
            "group": "Success 200",
            "type": "json",
            "optional": false,
            "field": "data",
            "description": "<p>数据</p>"
          },
          {
            "group": "Success 200",
            "type": "json",
            "optional": false,
            "field": "data.user",
            "description": "<p>数据</p>"
          },
          {
            "group": "Success 200",
            "type": "int",
            "optional": false,
            "field": "data.user.id",
            "description": "<p>用户编号</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "data.user.username",
            "description": "<p>登录账户</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "data.user.name",
            "description": "<p>用户姓名</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "data.user.sex",
            "description": "<p>性别 1女 2 男 0 未知</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "data.user.factory_name",
            "description": "<p>厂编号</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "data.user.factory_id",
            "description": "<p>厂编号</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "data.user_token",
            "description": "<p>用户登录令牌</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "正确实例:",
          "content": "\n{\n\"code\": 200,\n\"data\": {\n\"user\":{\n  \"username\":\"\",\n  \"name\":\"\",\n  \"sex\":1\n  \"factory_id\":1,\n  \"factory_name\":\"\",\n},\n'user_token':''\n},\n\"msg\": \"请求成功\"\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "code",
            "description": "<p>错误码<br> 0：系统错误<br></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "msg",
            "description": "<p>错误消息</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "错误实例:",
          "content": "{\n\"code\": \"0\",\n\"msg\": \"服务繁忙\",\n\"data\": []\n}",
          "type": "json"
        }
      ]
    },
    "filename": "modules/v1/controllers/AuthController.php",
    "groupTitle": "auth"
  },
  {
    "type": "post",
    "url": "/v1/auth/login",
    "title": "登录",
    "description": "<p>登录</p>",
    "name": "_v1_auth_login",
    "group": "auth",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "username",
            "description": "<p>手机号</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": "<p>密码</p>"
          }
        ]
      }
    },
    "version": "3.1.0",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "app_token",
            "description": ""
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "app_lang",
            "description": ""
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "app_type",
            "description": ""
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "app_version",
            "description": ""
          }
        ]
      },
      "examples": [
        {
          "title": "Header-Example:",
          "content": "{\n  \"app_token\": \"wVNq2Fcg-zXVcKDYRy_vLq7niv-36As3\",\n  \"app_lang\": \"zh\",\n  \"app_type\": \"smt_client\",\n  \"app_version\": \"2.4.7\",\n}",
          "type": "string"
        }
      ]
    },
    "sampleRequest": [
      {
        "url": "/v1/auth/login"
      }
    ],
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "code",
            "description": "<ol start=\"200\"> <li></li> </ol>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "msg",
            "description": "<p>消息</p>"
          },
          {
            "group": "Success 200",
            "type": "json",
            "optional": false,
            "field": "data",
            "description": "<p>数据</p>"
          },
          {
            "group": "Success 200",
            "type": "json",
            "optional": false,
            "field": "data.user",
            "description": "<p>数据</p>"
          },
          {
            "group": "Success 200",
            "type": "int",
            "optional": false,
            "field": "data.user.id",
            "description": "<p>用户编号</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "data.user.username",
            "description": "<p>登录账户</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "data.user.name",
            "description": "<p>用户姓名</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "data.user.sex",
            "description": "<p>性别 1女 2 男 0 未知</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "data.user.factory_name",
            "description": "<p>厂编号</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "data.user.factory_id",
            "description": "<p>厂编号</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "data.user_token",
            "description": "<p>用户登录令牌</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "正确实例:",
          "content": "{\n\"code\": 200,\n\"data\": {\n\"user\":{\n  \"username\":\"\",\n  \"name\":\"\",\n  \"sex\":1\n  \"factory_id\":1,\n  \"factory_name\":\"\",\n},\n 'user_token':''\n},\n\"msg\": \"请求成功\"\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "code",
            "description": "<p>错误码<br> 0：系统错误<br></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "msg",
            "description": "<p>错误消息</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "错误实例:",
          "content": "{\n\"code\": \"0\",\n\"msg\": \"服务繁忙\",\n\"data\": []\n}",
          "type": "json"
        }
      ]
    },
    "filename": "modules/v1/controllers/AuthController.php",
    "groupTitle": "auth"
  },
  {
    "type": "post",
    "url": "/v1/factory/list",
    "title": "获取工厂地址",
    "description": "<p>获取工厂地址</p>",
    "group": "factory",
    "name": "_v1_factory_list",
    "version": "3.1.0",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "app_token",
            "description": ""
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "app_lang",
            "description": ""
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "app_type",
            "description": ""
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "app_version",
            "description": ""
          }
        ]
      },
      "examples": [
        {
          "title": "Header-Example:",
          "content": "{\n  \"app_token\": \"wVNq2Fcg-zXVcKDYRy_vLq7niv-36As3\",\n  \"app_lang\": \"zh\",\n  \"app_type\": \"smt_client\",\n  \"app_version\": \"2.4.7\",\n}",
          "type": "string"
        }
      ]
    },
    "sampleRequest": [
      {
        "url": "/v1/factory/list"
      }
    ],
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "code",
            "description": "<ol start=\"200\"> <li></li> </ol>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "msg",
            "description": "<p>消息</p>"
          },
          {
            "group": "Success 200",
            "type": "json",
            "optional": false,
            "field": "data",
            "description": "<p>数据</p>"
          },
          {
            "group": "Success 200",
            "type": "json[]",
            "optional": false,
            "field": "data.list",
            "description": "<p>数据</p>"
          },
          {
            "group": "Success 200",
            "type": "int",
            "optional": false,
            "field": "data.list.factory_id",
            "description": "<p>工厂编号</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "data.list.factory_name",
            "description": "<p>工厂名称</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "data.list.factory_address",
            "description": "<p>工厂地址</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "正确实例:",
          "content": "\n{\n\"code\": 200,\n\"data\": {\n  \"list\":[{\n  \"factory_id\":1,\n  \"factory_name\":\"\"\n  \"factory_address\":\"\"\n}]\n},\n\"msg\": \"请求成功\"\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "code",
            "description": "<p>错误码<br> 0：系统错误<br></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "msg",
            "description": "<p>错误消息</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "错误实例:",
          "content": "{\n\"code\": \"0\",\n\"msg\": \"服务繁忙\",\n\"data\": []\n}",
          "type": "json"
        }
      ]
    },
    "filename": "modules/v1/controllers/FactoryController.php",
    "groupTitle": "factory"
  },
  {
    "type": "post",
    "url": "/v1/res/get",
    "title": "获取资源详情",
    "description": "<p>获取资源详情</p>",
    "name": "_v1_res_get",
    "group": "res",
    "version": "3.1.0",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "app_token",
            "description": ""
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "app_lang",
            "description": ""
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "app_type",
            "description": ""
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "app_version",
            "description": ""
          }
        ]
      },
      "examples": [
        {
          "title": "Header-Example:",
          "content": "{\n  \"app_token\": \"wVNq2Fcg-zXVcKDYRy_vLq7niv-36As3\",\n  \"app_lang\": \"zh\",\n  \"app_type\": \"smt_client\",\n  \"app_version\": \"2.4.7\",\n}",
          "type": "string"
        }
      ]
    },
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "res_id",
            "description": "<p>资源编号</p>"
          }
        ]
      }
    },
    "sampleRequest": [
      {
        "url": "/v1/res/get"
      }
    ],
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "code",
            "description": "<ol start=\"200\"> <li></li> </ol>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "msg",
            "description": "<p>消息</p>"
          },
          {
            "group": "Success 200",
            "type": "json",
            "optional": false,
            "field": "data",
            "description": "<p>数据</p>"
          },
          {
            "group": "Success 200",
            "type": "json",
            "optional": false,
            "field": "data.res",
            "description": "<p>数据</p>"
          },
          {
            "group": "Success 200",
            "type": "int",
            "optional": false,
            "field": "data.res.res_id",
            "description": "<p>资源编号</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "data.res.res_name",
            "description": "<p>资源名称</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "data.res.res_desc",
            "description": "<p>资源描述</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "data.res.res_suffix",
            "description": "<p>文件后缀</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "data.res.res_thumb",
            "description": "<p>缩略图</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "data.res.res_url",
            "description": "<p>资源访问地址</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "正确实例:",
          "content": "\n{\n\"code\": 200,\n\"data\": {\n\"res\":{\n  \"res_id\":1,\n  \"res_name\":\"\",\n  \"res_desc\":\"\",\n  \"res_suffix\":\"\",\n  \"res_thumb\":\"\",\n  \"res_times\":\"11:01\",\n  \"res_url\":\"\",\n}\n},\n\"msg\": \"请求成功\"\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "code",
            "description": "<p>错误码<br> 0：系统错误<br></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "msg",
            "description": "<p>错误消息</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "错误实例:",
          "content": "{\n\"code\": \"0\",\n\"msg\": \"服务繁忙\",\n\"data\": []\n}",
          "type": "json"
        }
      ]
    },
    "filename": "modules/v1/controllers/ResController.php",
    "groupTitle": "res"
  },
  {
    "type": "post",
    "url": "/v1/res/list",
    "title": "获取资源列表",
    "description": "<p>获取资源列表</p>",
    "name": "_v1_res_list",
    "group": "res",
    "version": "3.1.0",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "app_token",
            "description": ""
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "app_lang",
            "description": ""
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "app_type",
            "description": ""
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "app_version",
            "description": ""
          }
        ]
      },
      "examples": [
        {
          "title": "Header-Example:",
          "content": "{\n  \"app_token\": \"wVNq2Fcg-zXVcKDYRy_vLq7niv-36As3\",\n  \"app_lang\": \"zh\",\n  \"app_type\": \"smt_client\",\n  \"app_version\": \"2.4.7\",\n}",
          "type": "string"
        }
      ]
    },
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "factory_id",
            "description": "<p>工厂编号</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "res_name",
            "description": "<p>资源名称</p>"
          }
        ]
      }
    },
    "sampleRequest": [
      {
        "url": "/v1/res/list"
      }
    ],
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "code",
            "description": "<ol start=\"200\"> <li></li> </ol>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "msg",
            "description": "<p>消息</p>"
          },
          {
            "group": "Success 200",
            "type": "json",
            "optional": false,
            "field": "data",
            "description": "<p>数据</p>"
          },
          {
            "group": "Success 200",
            "type": "json[]",
            "optional": false,
            "field": "data.list",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "int",
            "optional": false,
            "field": "data.list.res_id",
            "description": "<p>资源编号</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "data.list.res_name",
            "description": "<p>资源名称</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "data.list.res_desc",
            "description": "<p>资源描述</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "data.list.res_suffix",
            "description": "<p>文件后缀</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "data.list.res_thumb",
            "description": "<p>缩略图</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "data.list.res_url",
            "description": "<p>资源访问地址</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "正确实例:",
          "content": "\n{\n\"code\": 200,\n\"data\": {\n  \"list\":[{\n  \"res_id\":1,\n  \"res_name\":\"\",\n  \"res_desc\":\"\",\n  \"res_suffix\":\"\",\n  \"res_thumb\":\"\",\n  \"res_times\":\"11:01\"\n  \"res_url\":\"\",\n}]\n},\n\"msg\": \"请求成功\"\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "code",
            "description": "<p>错误码<br> 0：系统错误<br></p>"
          },
          {
            "group": "Error 4xx",
            "type": "String",
            "optional": false,
            "field": "msg",
            "description": "<p>错误消息</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "错误实例:",
          "content": "{\n\"code\": \"0\",\n\"msg\": \"服务繁忙\",\n\"data\": []\n}",
          "type": "json"
        }
      ]
    },
    "filename": "modules/v1/controllers/ResController.php",
    "groupTitle": "res"
  }
] });
