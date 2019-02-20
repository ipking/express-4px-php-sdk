# 关于
4PX 递四方  PHP api for http://open.4px.com
本库仅做示范用，并不保证完全无bug。

另外，作者会不定期更新本库，但不保证与官方API接口文档同步，因此一切以[官方文档](http://open.4px.com/apiInfo/api)为准。


要使用 订单履约服务 需要到 http://b.4px.com 开通申请 FB4品牌

要使用 退件服务 需要到 http://b.4px.com 开通申请 GRS品牌

注册FOP账号 并等待4px审核通过 http://open.4px.com/login

在接入管理 -> 新增 -> 添加APP -> 并等待4px审核通过 

即可获得AppKey 和 AppSecret


# SDK的目录结构 
```
├── src // API 接口
│   ├── core //API接口的关键逻辑
│   ├── exception //异常错误类
│   └── oms //oms相关 API 接口类方法(client ,ErrorCode ,Parameter ,Response 以及枚举类)
└── demo // API接口的测试用例  支持纯数组参数/面向对象类属性参数 的调用请求
    └── oms // oms相关测试文件夹
        ├── com.basis // 公共服务 相关测试文件夹
        ├── fu.wms // 订单履约服务 相关测试文件夹
        ├── re.grs// 退件服务 相关测试文件夹
        ├── tr.order// 轨迹服务 相关测试文件夹
        └── config.inc.php //测试用例的配置信息  AppKey AppSecret 正式环境/沙箱环境/调试等
```
# 本SDK更新进度 
1、订单履约服务

2、退件服务

3、公共服务

4、轨迹服务
# 注意
在沙箱环境：

仓库代码(warehouse_code)  只支持 CNHKGB和CNDGMA。

物流产品代码(logistics_product_code)	只支持 API-TEST。

否则会出现 "程序内部错误，操作失败！" 之类的错误信息。