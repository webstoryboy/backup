<?php if(!defined("__XE__")) exit();
$info = new stdClass;
$info->default_index_act = '';
$info->setup_index_act='';
$info->simple_setup_index_act='';
$info->admin_index_act = 'dispWidgetAdminDownloadedList';
$info->permission = new stdClass;
$info->permission->dispWidgetGenerateCode = 'manager';
$info->permission->dispWidgetGenerateCodeInPage = 'manager';
$info->permission->dispWidgetStyleGenerateCodeInPage = 'manager';
$info->permission->procWidgetGenerateCode = 'manager';
$info->permission->procWidgetStyleGenerateCodeInPage = 'manager';
$info->permission->procWidgetInsertDocument = 'manager';
$info->permission->procWidgetCopyDocument = 'manager';
$info->permission->procWidgetDeleteDocument = 'manager';
$info->permission->procWidgetGenerateCodeInPage = 'manager';
$info->permission->procWidgetGetColorsetList = 'manager';
$info->permission->procWidgetStyleExtraImageUpload = 'manager';
$info->menu = new stdClass;
$info->menu->installedWidget = new stdClass;
$info->menu->installedWidget->title='설치된 위젯';
$info->menu->installedWidget->type='';
$info->action = new stdClass;
$info->action->dispWidgetInfo = new stdClass;
$info->action->dispWidgetInfo->type='view';
$info->action->dispWidgetInfo->grant='guest';
$info->action->dispWidgetInfo->standalone='true';
$info->action->dispWidgetInfo->ruleset='';
$info->action->dispWidgetInfo->method='';
$info->action->dispWidgetInfo->check_csrf='true';
$info->action->dispWidgetGenerateCode = new stdClass;
$info->action->dispWidgetGenerateCode->type='view';
$info->action->dispWidgetGenerateCode->grant='guest';
$info->action->dispWidgetGenerateCode->standalone='true';
$info->action->dispWidgetGenerateCode->ruleset='';
$info->action->dispWidgetGenerateCode->method='';
$info->action->dispWidgetGenerateCode->check_csrf='true';
$info->action->dispWidgetGenerateCodeInPage = new stdClass;
$info->action->dispWidgetGenerateCodeInPage->type='view';
$info->action->dispWidgetGenerateCodeInPage->grant='guest';
$info->action->dispWidgetGenerateCodeInPage->standalone='true';
$info->action->dispWidgetGenerateCodeInPage->ruleset='';
$info->action->dispWidgetGenerateCodeInPage->method='';
$info->action->dispWidgetGenerateCodeInPage->check_csrf='true';
$info->action->dispWidgetStyleGenerateCodeInPage = new stdClass;
$info->action->dispWidgetStyleGenerateCodeInPage->type='view';
$info->action->dispWidgetStyleGenerateCodeInPage->grant='guest';
$info->action->dispWidgetStyleGenerateCodeInPage->standalone='true';
$info->action->dispWidgetStyleGenerateCodeInPage->ruleset='';
$info->action->dispWidgetStyleGenerateCodeInPage->method='';
$info->action->dispWidgetStyleGenerateCodeInPage->check_csrf='true';
$info->action->procWidgetGenerateCode = new stdClass;
$info->action->procWidgetGenerateCode->type='controller';
$info->action->procWidgetGenerateCode->grant='guest';
$info->action->procWidgetGenerateCode->standalone='true';
$info->action->procWidgetGenerateCode->ruleset='';
$info->action->procWidgetGenerateCode->method='';
$info->action->procWidgetGenerateCode->check_csrf='true';
$info->action->procWidgetStyleGenerateCodeInPage = new stdClass;
$info->action->procWidgetStyleGenerateCodeInPage->type='controller';
$info->action->procWidgetStyleGenerateCodeInPage->grant='guest';
$info->action->procWidgetStyleGenerateCodeInPage->standalone='true';
$info->action->procWidgetStyleGenerateCodeInPage->ruleset='';
$info->action->procWidgetStyleGenerateCodeInPage->method='';
$info->action->procWidgetStyleGenerateCodeInPage->check_csrf='true';
$info->action->procWidgetInsertDocument = new stdClass;
$info->action->procWidgetInsertDocument->type='controller';
$info->action->procWidgetInsertDocument->grant='guest';
$info->action->procWidgetInsertDocument->standalone='true';
$info->action->procWidgetInsertDocument->ruleset='';
$info->action->procWidgetInsertDocument->method='';
$info->action->procWidgetInsertDocument->check_csrf='true';
$info->action->procWidgetCopyDocument = new stdClass;
$info->action->procWidgetCopyDocument->type='controller';
$info->action->procWidgetCopyDocument->grant='guest';
$info->action->procWidgetCopyDocument->standalone='true';
$info->action->procWidgetCopyDocument->ruleset='';
$info->action->procWidgetCopyDocument->method='';
$info->action->procWidgetCopyDocument->check_csrf='true';
$info->action->procWidgetDeleteDocument = new stdClass;
$info->action->procWidgetDeleteDocument->type='controller';
$info->action->procWidgetDeleteDocument->grant='guest';
$info->action->procWidgetDeleteDocument->standalone='true';
$info->action->procWidgetDeleteDocument->ruleset='';
$info->action->procWidgetDeleteDocument->method='';
$info->action->procWidgetDeleteDocument->check_csrf='true';
$info->action->procWidgetGenerateCodeInPage = new stdClass;
$info->action->procWidgetGenerateCodeInPage->type='controller';
$info->action->procWidgetGenerateCodeInPage->grant='guest';
$info->action->procWidgetGenerateCodeInPage->standalone='true';
$info->action->procWidgetGenerateCodeInPage->ruleset='generateCodeInPage';
$info->action->procWidgetGenerateCodeInPage->method='';
$info->action->procWidgetGenerateCodeInPage->check_csrf='true';
$info->action->procWidgetGetColorsetList = new stdClass;
$info->action->procWidgetGetColorsetList->type='controller';
$info->action->procWidgetGetColorsetList->grant='guest';
$info->action->procWidgetGetColorsetList->standalone='true';
$info->action->procWidgetGetColorsetList->ruleset='';
$info->action->procWidgetGetColorsetList->method='';
$info->action->procWidgetGetColorsetList->check_csrf='true';
$info->action->procWidgetStyleExtraImageUpload = new stdClass;
$info->action->procWidgetStyleExtraImageUpload->type='controller';
$info->action->procWidgetStyleExtraImageUpload->grant='guest';
$info->action->procWidgetStyleExtraImageUpload->standalone='true';
$info->action->procWidgetStyleExtraImageUpload->ruleset='';
$info->action->procWidgetStyleExtraImageUpload->method='';
$info->action->procWidgetStyleExtraImageUpload->check_csrf='true';
$info->menu->installedWidget->index='dispWidgetAdminDownloadedList';
$info->menu->installedWidget->acts[0]='dispWidgetAdminDownloadedList';
$info->action->dispWidgetAdminDownloadedList = new stdClass;
$info->action->dispWidgetAdminDownloadedList->type='view';
$info->action->dispWidgetAdminDownloadedList->grant='guest';
$info->action->dispWidgetAdminDownloadedList->standalone='true';
$info->action->dispWidgetAdminDownloadedList->ruleset='';
$info->action->dispWidgetAdminDownloadedList->method='';
$info->action->dispWidgetAdminDownloadedList->check_csrf='true';
$info->action->dispWidgetAdminAddContent = new stdClass;
$info->action->dispWidgetAdminAddContent->type='view';
$info->action->dispWidgetAdminAddContent->grant='guest';
$info->action->dispWidgetAdminAddContent->standalone='true';
$info->action->dispWidgetAdminAddContent->ruleset='';
$info->action->dispWidgetAdminAddContent->method='';
$info->action->dispWidgetAdminAddContent->check_csrf='true';
$info->menu->installedWidget->acts[1]='dispWidgetAdminGenerateCode';
$info->action->dispWidgetAdminGenerateCode = new stdClass;
$info->action->dispWidgetAdminGenerateCode->type='view';
$info->action->dispWidgetAdminGenerateCode->grant='guest';
$info->action->dispWidgetAdminGenerateCode->standalone='true';
$info->action->dispWidgetAdminGenerateCode->ruleset='';
$info->action->dispWidgetAdminGenerateCode->method='';
$info->action->dispWidgetAdminGenerateCode->check_csrf='true';
return $info;