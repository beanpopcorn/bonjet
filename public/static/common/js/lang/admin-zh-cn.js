
/**
 * 后台JS文件的多语言包
 */
function eyou_lang(key, str) {
    var langArr = new Array();
    langArr['Close shortcut management']='关闭快捷管理';
    langArr['Display shortcut management']='显示快捷管理';
    langArr['No upgrades may have security risks']='不升级可能有安全隐患';
    langArr['Get Pinyin']='获取拼音';
    langArr['List template']='列表模板';
    langArr['Template file does not exist']='模板文件不存在';
    langArr['Single page template']='单页模板';
    langArr['Message template']='留言模板';
    langArr['Fill in column names first']='先填写栏目名称';
    langArr['Loading……']='加载中……';
    langArr['Column names should not be empty']='栏目名称不能为空';
    langArr['The file save directory cannot be empty']='文件保存目录不能为空';
    langArr['Column English name can not be pure number']='栏目英文名不能为纯数字';
    langArr['Please select the list template']='请选择列表模板';
    langArr['Please select document template']='请选择文档模板';
    langArr['The file save directory already exists']='文件保存目录已存在';
    langArr['Unfold all sub columns']='展开所有子栏目';
    langArr['Close all sub columns']='关闭所有子栏目';
    langArr['If there are sub columns and documents will be emptied together to confirm deletion?']='<font color="#ff0000">如有子栏目及文档将一起清空</font>，确认删除？';
    langArr['Please select columns…']='请选择栏目…';
    langArr['The format of the field name is incorrect']='字段名称格式不正确';
    langArr['Please upload pictures']='请选择上传图片';
    langArr['Please select upload files']='请选择上传文件';
    langArr['Please upload the SQL file']='请上传sql文件';
    langArr['The name of the advertisement should not be empty']='广告名称不能为空';
    langArr['Please select a location']='请选择位置';
    langArr['The name of the advertisement must not be empty']='广告位名称不能为空';
    langArr['Please copy and paste the corresponding label code into the corresponding template file']='请将对应标签代码复制并粘贴到对应模板文件中！';
    langArr['Please select your role']='请选择所属角色';
    langArr['User name can not be empty']='用户名不能为空';
    langArr['The password must not be empty']='密码不能为空';
    langArr['Please input the original password']='请输入原密码';
    langArr['The length of the original password can not be less than 5 bits']='原始密码长度不能少于5位';
    langArr['Please enter a new password']='请输入新密码';
    langArr['The length of the new password can not be less than 5 bits']='新密码长度不能少于5位';
    langArr['Please enter confirmation password']='请输入确认密码';
    langArr['Confirm password length can not be less than 5 bits']='确认密码长度不能少于5位';
    langArr['Two password inconsistency']='两次密码输入不一致';
    langArr['The verification code can not be empty']='验证码不能为空';
    langArr['Ready to enter']='准备进入';
    langArr['Please contact webmaster']='请联系网站管理员';
    langArr['This column does not allow publishing documents']='该栏目不允许发布文档';
    langArr['The title should not be empty']='标题不能为空';
    langArr['Move document']='移动文档';
    langArr['Target columns do not belong to the same model']='目标栏目不属于同一模型';
    langArr['The name of the model cannot be empty']='模型名称不能为空';
    langArr['Model identifier can not be empty']='模型标识不能为空';
    langArr['The name of the data table cannot be empty']='数据表名不能为空';
    langArr['The controller name can not be empty']='控制器名不能为空';
    langArr['The name of the left menu can not be empty']='左侧菜单名称不能为空';
    langArr['Field name']='字段名称';
    langArr['Field names can not be digits']='字段名称不能纯数字';
    langArr['Field header cannot be empty']='字段标题不能为空';
    langArr['Please select field type']='请选择字段类型';
    langArr['The default value can not be empty']='默认值不能为空';
    langArr['Data will not be recovered, confirm deletion?']='<font color="#ff0000">数据将无法恢复</font>，确认删除？';
    langArr['The working directory must not be empty']='工作目录不能为空';
    langArr['The name of the file can not be empty']='文件名称不能为空';
    langArr['New location can not be empty']='新位置不能为空';
    langArr['New directory should not be empty']='新目录不能为空';
    langArr['New name should not be empty']='新名称不能为空';
    langArr['The name of the form can not be empty']='表单名称不能为空';
    langArr['Please select the form type']='请选择表单类型';
    langArr['The list of optional values cannot be empty']='可选值列表不能为空';
    langArr['URL URL can not be empty']='网址URL不能为空';
    langArr['The name of the website can not be empty']='网站名称不能为空';
    langArr['Please upload website Logo pictures']='请上传网站Logo图片';
    langArr['Failed to load, click here']='加载失败，点击此处';
    langArr['Refresh']='刷新';
    langArr['The parameter name cannot be empty']='参数名称不能为空';
    langArr['Content page']='内容页';
    langArr['List page']='列表页';
    langArr['Custom variables']='自定义变量';
    langArr['Variable names cannot be empty']='变量名称不能为空';
    langArr['AccessKeyId can not be empty']='AccessKeyId 不能为空';
    langArr['AccessKeySecret can not be empty']='AccessKeySecret 不能为空';
    langArr['Endpoint can not be empty']='Endpoint 不能为空';
    langArr['Bucket can not be empty']='Bucket 不能为空';
    langArr['Please fill in the correct test cell phone number']='请填写正确的测试手机号码';
    langArr['Please fill in the SMS platform [appkey]']='请填写短信平台[appkey]';
    langArr['Please fill in the SMS platform [secretKey]']='请填写短信平台[secretKey]';
    langArr['Please fill in the company name / brand name / product name']='请填写公司名/品牌名/产品名';
    langArr['Please fill in the email sending server address']='请填写邮件发送服务器地址';
    langArr['Please fill in the correct email account']='请填写正确的邮箱账号';
    langArr['Please fill in the password for sending the mailbox']='请填写发送邮箱密码';
    langArr['Please fill in the correct test email account']='请填写正确的测试邮箱账号';
    langArr['Label call']='标签调用';
    langArr['Please select the data table to be backed up']='请选中要备份的数据表';
    langArr['Sending backup requests...']='正在发送备份请求...';
    langArr['Initialization is successful. Please do not close this page']='初始化成功，请不要关闭本页面！';
    langArr['Start backup, please do not close this page!']='开始备份，请不要关闭本页面！';
    langArr['Backup database, please do not close!']='正在备份数据库，请不要关闭！';
    langArr['Immediate backup']='立即备份';
    langArr['Start backing up']='开始备份';
    langArr['Backup table']='正在备份表';
    langArr['Initialization success! Start backing up... Please do not close this page!']='初始化成功！开始备份……，请不要关闭本页面！';
    langArr['Initialization success! Backup table']='初始化成功！正在备份表';
    langArr[', Please do not close this page!']='，请不要关闭本页面！';
    langArr['Backup completed... 100%, please do not close this page!']='备份完成……100%，请不要关闭本页面！';
    langArr['Backup completed... 100%, click back to backup']='备份完成……100%，点击重新备份';
    langArr['Backup success']='备份成功';
    langArr['Detection plug-in update']='检测插件更新';
    langArr['Updated version']='已升级最新版本';
    langArr['Please upload zip compressed package']='请上传zip压缩包';
    langArr['Confirm upload decompression?']='确认上传解压？';
    langArr['Please proceed with caution. Do you want to uninstall the plugin?']='请谨慎操作，是否卸载该插件？';
    langArr['Retain data only']='仅保留数据';
    langArr['Batch mobile confirmation']='确认批量移动';
    langArr['0 pictures allowed']='允许上传0张图片';
    langArr['More than N words']='已超出<em class="error">'+str+'</em>个字';
    langArr['You can enter N words']='还可以输入<em>'+str+'</em>个字';
    langArr['Tip: system update will not involve foreground template and website data']='<font color="red">小提示：系统更新不会涉及前台模板及网站数据等。</font>';
    langArr['Latest version of detection system:']='检测系统最新版：';
    langArr['This reminder can be opened in core settings']='【核心设置】里可以开启该提醒';
    langArr['No longer reminding']='不再提醒';
    langArr['Ignore']='忽略';
    langArr['Upgrade']='升级';
    langArr['Got it']='知道了';
    langArr['Upgradeing']='升级中';
    langArr['No upgrades may have security risks']='不升级可能有安全隐患';
    langArr['Being dealt with']='正在处理';
    langArr['This operation is irreversible. Confirm the complete unloading?']='此操作不可恢复，确认彻底卸载？';
    langArr['Complete unload']='彻底卸载';
    langArr['Network request failed']='未知错误，无法继续！';
    langArr['Successful operation']='操作成功';
    langArr['Operation failed']='操作失败';
    langArr['There is no list of documents in this column']='该栏目没有文档列表';
    langArr['Batch deleting']='批量删除';
    langArr['This operation is irreversible. Confirm deletion?']='此操作不可恢复，确认删除？';
    langArr['Code call']='代码调用';
    langArr['Do not refresh the page']=str+'...&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;请勿刷新页面';
    langArr['Please choose the column of the corresponding model']='请选择对应模型的栏目';
    langArr['Please choose at least one item']='请至少选择一项';
    langArr['Default value']='默认值';
    langArr['Send in']='发送中';
    langArr['Send success']='发送成功';
    langArr['Replicating success']='复制成功';
    langArr['Replication failed! Please copy manually']='复制失败！请手动复制';
    langArr['Please be patient']='请耐心等待';
    langArr['Click to select pictures']='点击选择图片';
    langArr['Tips']='提示';
    langArr['Update success']='更新成功';
    langArr['Confirm']='确定';
    langArr['Cancel']='取消';
    langArr['This operation is irreversible. Confirm batch deletion?']='此操作不可恢复，确定批量删除？';
    langArr['Upload a picture']='上传图片';
    langArr['Error of parameters']='参数有误';
    langArr['Yes']='是';
    langArr['Confirmation of submission']='确认提交';
    langArr['Lack of system parameters: ID, type, page, try to request technical support']='缺少系统参数：id、type、page，尝试请求技术支持';
    langArr['The following box list']='下列框列表';

    return langArr[key];
}
