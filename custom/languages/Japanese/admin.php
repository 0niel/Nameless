<?php
/*
 *	Made by Samerton
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr3
 *
 *  Translation by SimplyRin(@SimplyRin_, https://www.simplyrin.net)
 *
 *  License: MIT
 *
 *  Japanese Language - Admin
 */

$language = array(
	/*
	 *  Admin Control Panel
	 */
	// Login
	're-authenticate' => '再認証してください。',

	// Sidebar
	'admin_cp' => 'AdminCP',
	'administration' => '管理',
	'overview' => '概要',
	'core' => 'コア',
	'minecraft' => 'Minecraft',
	'modules' => 'モジュール',
	'security' => 'セキュリティ',
	'sitemap' => 'Sitemap',
	'styles' => 'スタイル',
	'users_and_groups' => 'ユーザーとグループ',

	// Overview
	'running_nameless_version' => '実行している NamelessMC バージョン <strong>{x}</strong>', // Don't replace "{x}"
	'running_php_version' => '実行している PHP バージョン <strong>{x}</strong>', // Don't replace "{x}"
	'statistics' => '統計情報',
	'registrations' => 'Registrations',
	'topics' => 'Topics',
	'posts' => 'Posts',
    'notices' => '通知',
    'no_notices' => '通知はありません。',
    'email_errors_logged' => '電子メールエラーが記録されました。<a href="{x}">ここ</a>をクリックして確認。', // Don't replace "{x}"

	// Core
	'settings' => '設定',
	'general_settings' => '全般的な設定',
	'sitename' => 'サイト名',
	'default_language' => 'デフォルト言語',
	'default_language_help' => 'ユーザーはインストールされている言語から選択できます。',
	'installed_languages' => '新しい言語がすべて正常にインストールされました。',
	'default_timezone' => 'デフォルトタイムゾーン',
	'registration' => '登録',
	'enable_registration' => '登録を有効にしますか？',
	'verify_with_mcassoc' => 'MCAssocでユーザーアカウントを確認しますか？',
	'email_verification' => 'メールの確認を有効にしますか？',
	'homepage_type' => 'ホームページタイプ',
	'post_formatting_type' => 'ポストフォーマットタイプ',
	'portal' => 'ポータル',
	'missing_sitename' => '2~64文字でサイト名を入力してください。',
	'use_friendly_urls' => 'フレンドリーURL',
	'use_friendly_urls_help' => '重要: あなたのサーバーで mod_rewrite と .htaccess ファイルを使用できるように設定を変更する必要があります。',
	'config_not_writable' => '<strong>core/config.php</strong> ファイルへの書き込み許可がありません。ファイルアクセス権利を確認して下さい。',
	'social_media' => 'ソーシャルメディア',
	'youtube_url' => 'YouTube URL',
	'twitter_url' => 'Twitter URL',
	'twitter_dark_theme' => 'Twitter ダークテーマを使用しますか？',
	'discord_id' => 'Discord サーバー ID',
	'discord_widget_theme' => 'Discord Widget Theme',
	'dark' => 'Dark',
	'light' => 'Light',
	'google_plus_url' => 'Google+ URL',
	'facebook_url' => 'Facebook URL',
	'successfully_updated' => '正常に更新されました',
    'debugging_and_maintenance' => 'デバッグとメンテナンス',
    'enable_debug_mode' => 'デバッグモードを有効にしますか？',
    'force_https' => 'Https を強制させますか？',
    'force_https_help' => '有効にするとウェブサイトへのリクエストはすべて https にリダイレクトされます。 これが正しく機能するには、有効なSSL証明書を有効にする必要があります。',
    'force_www' => 'Force www?',
    'contact_email_address' => '連絡先メールアドレス',
    'emails' => 'メール',
    'email_errors' => 'メールエラー',
    'registration_email' => '登録メール',
    'contact_email' => '連絡先メールアドレス',
    'forgot_password_email' => 'パスワードを忘れた',
    'unknown' => '不明',
    'delete_email_error' => 'エラーの削除',
    'confirm_email_error_deletion' => 'このエラーを削除してもよろしいですか？',
    'viewing_email_error' => 'エラーの表示',
    'unable_to_write_email_config' => '<strong>core/email.php</core> ファイルに書き込みできません。ファイルアクセス権利を確認して下さい。',
    'enable_mailer' => 'PHPMailer を有効にしますか？',
    'enable_mailer_help' => '電子メールがデフォルトで送信されていない場合は、これを有効にします。 PHPMailer を使用するには、Gmail や SMTP プロバイダなどの電子メールを送信できるサービスが必要です。',
    'outgoing_email' => '送信メールアドレス',
    'outgoing_email_info' => 'これは NamelessMC が電子メールの送信に使用する電子メールアドレスです。',
    'mailer_settings_info' => 'PHPMailer を有効にしている場合は、次のフィールドが必要です。 これらのフィールドに記入する方法の詳細については、<a href="https://github.com/NamelessMC/Nameless/wiki/Setting-up-Gmail-or-SMTP-with-Nameless" target="_blank">Wiki</a> を確認して下さい。',
    'host' => 'ホスト',
    'email_port' => 'ポート',
    'email_password_hidden' => 'セキュリティ上の理由から、パスワードは表示されません。',
    'send_test_email' => 'テストメールを送信',
    'send_test_email_info' => '次のボタンはメールアドレス <strong>{x}</strong> にメールを送信しようとします。 電子メールの送信中にスローされたエラーが表示されます。', // Don't replace {x}
    'send' => '送信',
    'test_email_error' => 'テストメールエラー:',
    'test_email_success' => 'テストメールが正常に送信されました！',
    'terms_error' => '利用条件が2048文字以下であることをご確認ください。',
    'terms_updated' => '利用規約が更新されました。',
    'avatars' => 'アバター',
    'allow_custom_avatars' => 'カスタムユーザーアバターを許可にしますか？',
    'default_avatar' => 'デフォルトアバター',
    'custom_avatar' => 'カスタムアバター',
    'minecraft_avatar' => 'Minecraft アバター',
    'minecraft_avatar_source' => 'Minecraft アバダーソース',
    'built_in_avatars' => 'ビルトインのアバターサービス',
    'minecraft_avatar_perspective' => 'Minecraft アバターのパースペクティブ',
    'face' => '顔',
    'head' => '頭',
    'select_default_avatar' => '新しいデフォルトのアバターを選択:',
    'no_avatars_available' => 'アバターは利用できません。 最初に新しい画像をアップロードしてください。',
    'avatar_settings_updated_successfully' => 'アバター設定が正常に更新されました。',
    'navigation' => 'ナビゲーション',
    'navbar_order' => 'ナビバーオーダー',
    'navbar_order_instructions' => '各アイテムに 0 以上の数字を付けて、ナビゲーションバーのアイテムを注文することができます。最初のアイテムは 1、それ以降は上位のアイテムです。',
    'navbar_icon' => 'Navbar Icon',
    'navbar_icon_instructions' => 'You can also add an icon to each navbar item here, for example using <a href="https://fontawesome.com/v4.7.0/" target="_blank" rel="noopener nofollow">Font Awesome</a>.',
    'dropdown_items' => 'Dropdown Items',
    'enable_page_load_timer' => 'ページロードタイマーを有効にしますか？',
    'google_recaptcha' => 'Google reCAPTCHA を有効にしますか？',
    'recaptcha_site_key' => 'reCAPTCHA サイトキー',
    'recaptcha_secret_key' => 'reCAPTCHA シークレットキー',
    'registration_disabled_message' => '登録無効メッセージ',
    'enable_nicknames_on_registration' => 'ユーザーを登録するニックネームを有効にしますか？',
    'validation_promote_group' => '昇格検証グループ',
    'validation_promote_group_info' => 'アカウントの有効を確認したユーザーに昇格されるグループです。',
    'login_method' => 'Login Method',
    'privacy_and_terms' => 'Privacy Policy and Terms & Conditions',

	// Reactions
	'icon' => 'アイコン',
	'type' => 'タイプ',
	'positive' => 'ポジティブ',
	'neutral' => 'ナチュラル',
	'negative' => 'ネガティブ',
	'editing_reaction' => '反応の編集',
	'html' => 'HTML',
	'new_reaction' => '<i class="fa fa-plus-circle"></i> 新しい反応',
	'creating_reaction' => '反応の作成',

	// Custom profile fields
	'custom_fields' => 'カスタムプロファイルフィールド',
	'new_field' => '<i class="fa fa-plus-circle"></i> 新しいフィールド',
	'required' => '必須',
	'editable' => 'Editable',
	'public' => 'パブリック',
	'text' => 'テキスト',
	'textarea' => 'テキスト エリア',
	'date' => '日付',
	'creating_profile_field' => 'プロファイルフィールドの作成',
	'editing_profile_field' => 'プロファイルフィールドの編集',
	'field_name' => 'フィールド名',
	'profile_field_required_help' => '必須フィールドにはユーザーを入力する必要があり、登録時に表示されます。',
	'profile_field_public_help' => 'パブリックフィールドはすべてのユーザーに表示されますが、無効になっている場合はモデレーターのみ値を表示できます。',
	'profile_field_error' => '2~16文字のフィールド名を入力してください。',
	'description' => '説明',
	'display_field_on_forum' => 'フォーラムにフィールドを表示しますか？',
	'profile_field_forum_help' => '有効にすると、ユーザはフォーラムの投稿の横にフィールドを表示します。',
	'profile_field_editable_help' => 'If enabled, users will have permission to edit the field in their profile settings.',
	'no_custom_fields' => 'There are no custom fields yet.',

    // Minecraft
    'enable_minecraft_integration' => 'Minecraft 統合を有効にしますか？',
    'mc_service_status' => 'Minecraft サービスステータス',
    'service_query_error' => 'サービスのステータスを取得できません。',
    'authme_integration' => 'AuthMe インテグレーション',
    'authme_integration_info' => 'AuthMe 統合が有効になっている場合、ユーザーは ingame のみを登録できます。',
    'enable_authme' => 'AuthMe 統合を有効にしますか？',
    'authme_db_address' => 'AuthMe データベースアドレス',
    'authme_db_port' => 'AuthMe データベースポート',
    'authme_db_name' => 'AuthMe データベース名',
    'authme_db_user' => 'AuthMe データベースユーザー名',
    'authme_db_password' => 'AuthMe データベースパスワード',
    'authme_hash_algorithm' => 'AuthMe ハッシュアルゴリズム',
    'authme_db_table' => 'AuthMe ユーザーテーブル',
    'enter_authme_db_details' => '有効なデータベースの詳細を入力してください。',
    'authme_password_sync' => 'Authme パスワードを同期しますか？',
    'authme_password_sync_help' => '有効にするとユーザーのパスワードが更新されるたびに、Web サイトも更新されます。',
    'minecraft_servers' => 'Minecraft サーバー',
    'account_verification' => 'Minecraft アカウントの確認',
    'server_banners' => 'サーバーバーナー',
    'query_errors' => 'クエリ エラー',
    'add_server' => '<i class="fa fa-plus-circle"></i> サーバーを追加',
    'no_servers_defined' => 'サーバーはまだ定義されていません',
    'query_settings' => 'クエリの設定',
    'default_server' => 'デフォルトサーバー',
    'no_default_server' => 'デフォルトサーバーがありません',
    'external_query' => '外部クエリを使用しますか。',
    'external_query_help' => 'デフォルトのサーバークエリが機能しない場合は、このオプションを有効にします。',
    'adding_server' => 'サーバーの追加',
    'server_name' => 'サーバー名',
    'server_address' => 'サーバーアドレス',
    'server_address_help' => 'これはポートなしでサーバーに接続するために使用されるIPアドレスまたはドメインです。',
    'server_port' => 'サーバーポート',
    'parent_server' => '親サーバー',
    'parent_server_help' => '親サーバーは通常、サーバーが接続されている Bungee インスタンス(存在する場合)です。',
    'no_parent_server' => '親サーバーなし',
    'bungee_instance' => 'BungeeCord インスタンス？',
    'bungee_instance_help' => 'サーバーが BungeeCord インスタンスである場合はこのオプションを選択してください。',
    'server_query_information' => 'Web サイトにオンラインプレーヤーのリストを表示するには、サーバーの <strong>server.properties</strong> ファイルで \'enable-query\' オプションを<strong>有効</strong>にする必要があります',
    'enable_status_query' => 'ステータスクエリを有効にしますか？',
    'status_query_help' => 'これを有効にすると、ステータスページにこのサーバーがオンラインまたはオフラインとして表示されます。',
    'enable_player_list' => 'プレイヤーリストを有効にしますか？',
    'pre_1.7' => '1.7 より古いMinecraft バージョンを使用していますか？',
    'player_list_help' => 'これを有効にすると、ステータスページにオンラインプレーヤーのリストが表示されます。',
    'server_query_port' => 'サーバークエリポート',
    'server_query_port_help' => 'これはサーバーの server.properties ファイルの query.port オプションです。ただし、同じファイル内の enable-query オプションが true に設定されている場合に限ります。',
    'server_name_required' => 'サーバー名を入力して下さい。',
    'server_name_minimum' => 'サーバー名が1文字以上であることを確認してください',
    'server_name_maximum' => 'サーバー名が最大20文字であることを確認してください',
    'server_address_required' => 'サーバーのアドレスを入力してください',
    'server_address_minimum' => 'サーバーアドレスが1文字以上であることを確認してください',
    'server_address_maximum' => 'サーバーアドレスが最大64文字であることを確認してください',
    'server_port_required' => 'サーバーポートを入力してください',
    'server_port_minimum' => 'サーバーポートが2文字以上であることを確認してください',
    'server_port_maximum' => 'サーバーのポートが最大5文字であることを確認してください',
    'server_parent_required' => '親サーバーを選択して下さい',
    'query_port_maximum' => 'クエリポートが最大5文字であることを確認してください',
    'server_created' => 'サーバーが正常に作成されました。',
    'confirm_delete_server' => 'このサーバーを削除してもよろしいですか？',
    'server_updated' => 'サーバーが正常に更新されました。',
    'editing_server' => 'サーバーの編集',
    'server_deleted' => 'サーバーが正常に削除されました',
    'unable_to_delete_server' => 'サーバーを削除できません。',
    'leave_port_empty_for_srv' => 'ポートが25565である場合、またはドメインがSRVレコードを使用している場合は、ポートを空のままにすることができます',
    'viewing_query_error' => 'クエリエラーの表示',
    'confirm_query_error_deletion' => 'このクエリエラーを削除してもよろしいですか？',
    'no_query_errors' => 'クエリエラーは記録されません。',
    'new_banner' => '<i class="fa fa-plus-circle"></i> 新しいバナー',
    'purge_errors' => 'エラーを消去',
    'confirm_purge_errors' => 'すべてのエラーを消去してもよろしいですか？',
    'mcassoc_help' => 'mcassoc はユーザーが登録したMinecraftアカウントを所有していることを確認するために使用できる外部サービスです。 この機能を使用するには、共有キーが必要で <a href="https://mcassoc.lukegb.com/" target="_blank"> ここ </a> でサインアップする必要があります。',
    'mcassoc_key' => 'mcassoc 共有キー',
    'mcassoc_instance' => 'mcassoc インスタンスキー',
    'mcassoc_instance_help' => '<a href="#" onclick="generateInstance();">クリックしてインスタンスキーを生成する</a>',
    'mcassoc_error' => '共有キーが正しく入力され、インスタンスキーが正しく生成されていることを確認してください。',
    'updated_mcassoc_successfully' => 'mcassoc 設定が正常に更新されました。',
    'force_premium_accounts' => 'プレミアム Minecraft アカウントを強制しますか？',
    'banner_background' => 'バナーの背景',
    'query_interval' => 'クエリー間隔 (分単位で、5~60でなければなりません)',
    'player_graphs' => 'プレイヤーグラフ',
    'player_count_cronjob_info' => '次のコマンドを使用して {x} 分ごとにサーバーに照会するようにジョブを設定できます。',
    'status_page' => 'Enable status page?',

	// Modules
	'modules_installed_successfully' => '新しいモジュールが正常にインストールされました。',
	'enabled' => '有効',
	'disabled' => '無効',
	'enable' => '有効',
	'disable' => '無効',
	'module_enabled' => 'モジュールを有効にしました。',
	'module_disabled' => 'モジュールを無効にしました。',
	'author' => '作成者:',

	// Styles
	'templates' => 'テンプレート',
	'template_outdated' => 'あなたのテンプレートは NamelessMC バージョン {x} を対象としていますが、NamelessMC バージョン {y} を実行しています', // Don't replace "{x}" or "{y}"
	'active' => 'アクティブ',
	'deactivate' => '非アクティブ',
	'activate' => 'アクティベート',
	'warning_editing_default_template' => '警告！ デフォルトのテンプレートは編集しないことをお勧めします。',
	'images' => '画像',
	'upload_new_image' => '画像のアップロード',
	'reset_background' => '背景をリセット',
	'install' => '<i class="fa fa-plus-circle"></i> インストール',
	'template_updated' => 'テンプレートが正常に更新されました。',
	'default' => 'デフォルト',
	'make_default' => 'デフォルトにする',
	'default_template_set' => '既定のテンプレートは {x} に正常に設定されています。', // Don't replace {x}
	'template_deactivated' => 'テンプレートが無効化されました。',
	'template_activated' => 'テンプレートが有効になりました。',
	'permissions' => '権利',
	'setting_perms_for_x' => 'テンプレート {x} のアクセス許可を設定する', // Don't replace {x}
	'templates_installed_successfully' => '新しいテンプレートが正常にインストールされました。',
	'confirm_delete_template' => 'このテンプレートを削除してもよろしいですか？',
	'delete' => '削除',
	'template_deleted_successfully' => 'テンプレートが正常に削除されました。',
    'background_image_x' => 'Background image: <strong>{x}</strong>', // Don't replace {x}

	// Users & groups
	'users' => 'ユーザー',
	'groups' => 'グループ',
	'group' => 'グループ',
	'new_user' => '<i class="fa fa-plus-circle"></i> 新しいユーザー',
	'creating_new_user' => '新規ユーザーの作成',
	'registered' => '登録',
	'user_created' => 'ユーザーが正常に作成されました。',
	'cant_delete_root_user' => 'Root ユーザーは削除できません!',
	'cant_modify_root_user' => 'root ユーザーのグループは変更できません！',
	'user_deleted' => 'ユーザーは正常に削除されました。',
	'confirm_user_deletion' => '<strong>{x}</strong> ユーザーを削除してもよろしいですか？', // Don't replace {x}
	'validate_user' => 'ユーザーを検証します。',
	'update_uuid' => 'UUID を更新します。',
	'update_mc_name' => 'Minecraft ユーザー名を更新',
	'reset_password' => 'パスワードをリセット',
	'punish_user' => '悪質なユーザー',
	'delete_user' => 'ユーザーを削除',
	'minecraft_uuid' => 'Minecraft UUID',
	'other_actions' => 'その他のアクション',
	'disable_avatar' => 'アバターを無効にする',
	'select_user_group' => 'ユーザーのグループを選択する必要があります。',
	'uuid_max_32' => 'UUID は、最大 32 文字にする必要があります。',
	'title_max_64' => 'ユーザーのタイトルは、最大64文字でなければなりません。',
	'group_id' => 'グループ ID',
	'name' => '名前',
	'title' => 'ユーザータイトル',
	'new_group' => '<i class="fa fa-plus-circle"></i> 新しいグループ',
	'group_name_required' => 'グループ名を入力してください。',
	'group_name_minimum' => 'あなたのグループ名は2文字以上でなければなりません。',
	'group_name_maximum' => 'あなたのグループ名は20文字以内でなければなりません。',
	'creating_group' => '新しいグループの作成',
	'group_html_maximum' => 'グループのHTMLの長さが 1,024 文字以下であることを確認してください。',
	'group_html' => 'グループ HTML',
	'group_html_lg' => 'グループ HTML が大きい',
	'group_username_colour' => 'グループユーザーネームカラー',
	'group_staff' => 'グループはスタッフグループですか？',
	'group_modcp' => 'グループは ModCP を表示できますか？',
	'group_admincp' => 'グループは AdminCP を表示できますか？',
	'delete_group' => 'グループの削除',
	'confirm_group_deletion' => 'グループ {x} を削除してもよろしいですか？', // Don't replace {x}
	'group_not_exist' => 'そのグループは存在しません。',
	'secondary_groups' => 'セカンダリグループ',
	'secondary_groups_info' => 'ユーザーはこれらのグループから追加の権限を取得します。 複数のグループを選択/選択解除するには Ctrl +クリック します。',
	'unable_to_update_uuid' => 'UUID を更新できません。',
	'default_group' => 'デフォルトグループ (新規ユーザー向け)？',

	// Permissions
	'select_all' => 'すべて選択',
	'deselect_all' => 'すべての選択を解除',
	'background_image' => '背景画像',
	'can_edit_own_group' => '自分のグループの権限を編集できます',
	'permissions_updated_successfully' => '権利更新が成功しました。',
	'cant_edit_this_group' => 'このグループの権限を編集することはできません！',

	// General Admin language
	'task_successful' => 'タスクは成功しました。',
	'invalid_action' => '無効なアクション',
	'enable_night_mode' => 'ナイトモードを有効化',
	'disable_night_mode' => 'ナイトモードを無効化',
	'view_site' => 'サイトを表示',
	'signed_in_as_x' => '{x} としてログインしています', // Don't replace {x}
    'warning' => '警告',

    // Maintenance
    'maintenance_mode' => 'メンテナンスモード',
    'maintenance_enabled' => 'メンテナンスモードは現在有効です。',
    'enable_maintenance_mode' => 'メンテナンスモードを有効にしますか？',
    'maintenance_mode_message' => 'メンテナンスモードメッセージ',
    'maintenance_message_max_1024' => 'メンテナンスメッセージが最大 1,024 文字であることを確認してください。',

	// Security
	'acp_logins' => 'AdminCP ログイン',
	'please_select_logs' => '表示するログを選択してください',
	'ip_address' => 'IP アドレス',
	'template_changes' => 'テンプレートの変更',
	'file_changed' => 'ファイルが変更されました',
	'all_logs' => 'All Logs',
	'action' => 'Action',
	'action_info' => 'Action Info',

	// Updates
	'update' => 'アップデート',
	'current_version_x' => '現在のバージョン: <strong>{x}</strong>', // Don't replaec {x}
	'new_version_x' => '新しいバージョン: <strong>{x}</strong>', // Don't replace {x}
	'new_update_available' => '新しいアップデートがあります',
	'up_to_date' => 'あなたの使用している NamelessMC バージョンは最新です！',
	'urgent' => 'このアップデートは緊急アップデートです',
	'changelog' => '変更ログ',
	'update_check_error' => '更新を確認中にエラーが発生しました：',
	'instructions' => '指示',
	'download' => 'ダウンロード',
	'install_confirm' => 'パッケージをダウンロードし、含まれているファイルを最初にアップロードしたことを確認してください！',

	// Widgets
	'widgets' => 'ウィジェット',
	'widget_enabled' => 'ウィジェットを有効化しました。',
	'widget_disabled' => 'ウィジェットを無効化しました。',
	'editing_widget_x' => 'ウィジェット {x} の編集', // Don't replace {x}
	'module_x' => 'モジュール: {x}', // Don't replace {x}
	'widget_order' => 'Widget Order',

    // Online users widget
    'include_staff_in_user_widget' => 'Include staff members in user widget?',

    // Custom Pages
    'pages' => 'ページ',
    'new_page' => '<i class="fa fa-plus-circle"></i> 新しいページ',
    'no_custom_pages' => 'ページはまだ作成されていません。',
    'creating_new_page' => 'ページの作成',
    'page_title' => 'ページタイトル',
    'page_path' => 'ページパス (先行 /, 例 /example)',
    'page_icon' => 'ページ アイコン',
    'page_link_location' => 'ページリンクの場所',
    'page_link_navbar' => 'ナビゲーションバー',
    'page_link_footer' => 'フッター',
    'page_link_more' => '"More"ドロップダウン',
    'page_link_none' => 'リンクなし',
    'page_content' => 'ページ コンテンツ',
    'page_redirect' => 'ページリダイレクト？',
    'page_redirect_to' => 'リダイレクトリンク (http:// からはじまる)',
    'unsafe_html' => '安全でない HTML を許可しますか？',
    'unsafe_html_warning' => 'このオプションを有効にすると、潜在的に危険な JavaScript を含む HTML をページで使用できることを意味します。 HTMLが安全であると確信している場合にのみ、これを有効にしてください。',
    'include_in_sitemap' => 'Include in sitemap?',
    'page_permissions' => 'ページのアクセス権利',
    'view_page' => 'ページを表示しますか？',
    'editing_page_x' => '編集ページ: {x}', // Don't replace {x}
    'unable_to_create_page' => 'ページを作成できません:',
    'page_title_required' => 'ページタイトルが必要です。',
    'page_url_required' => 'ページパスが必要です。',
    'link_location_required' => 'リンクの場所が必要です。',
    'page_title_minimum_2' => 'ページタイトルは2文字以上でなければなりません。',
    'page_url_minimum_2' => 'ページパスは2文字以上でなければなりません。',
    'page_title_maximum_30' => 'ページタイトルは最大30文字でなければなりません。',
    'page_icon_maximum_64' => 'ページアイコンは最大64文字でなければなりません。',
    'page_url_maximum_20' => 'ページパスは最大20文字でなければなりません。',
    'page_content_maximum_100000' => 'ページの内容は最大100000文字でなければなりません。',
    'page_redirect_link_maximum_512' => 'ページリダイレクトリンクは、最大 512 文字でなければなりません。',
    'confirm_delete_page' => 'このページを削除してもよろしいですか？',

    // API
    'api' => 'API',
    'enable_api' => 'API を有効にしますか？',
    'api_info' => 'APIを使用すると、プラグインやその他のサービスが公式の <a href="https://namelessmc.com/resources/resource/5-namelessplugin/" target="_blank" >Namelessプラグイン</a> などのWebサイトとやりとりすることができます。',
    'enable_legacy_api' => '従来の API を有効にしますか？',
    'legacy_api_info' => '従来の API では、 Nameless v1 APIを使用するプラグインで、 v2 のWebサイトで動作することができます。',
    'confirm_api_regen' => 'APIキーを再生成してもよろしいですか？',
    'api_registration_email' => 'API登録メール',
    'link_to_complete_registration' => '登録を完了するためのリンク: {x}', // Don't replace {x}
    'api_verification' => 'APIの確認を有効にしますか？',
    'api_verification_info' => '有効にすると、APIを介してアカウントを確認することができます。たとえば、公式のNamelessプラグインを使用してアカウントを確認することができます。<strong>このオプションは電子メールの検証より優先され、アカウントは自動的に有効になります！</strong><br />既定のグループを設定して、アクセス許可を制限し、AdminCP - >コア - >登録タブのポスト検証グループを、通常のアクセス許可を持つフルメンバーグループに更新する必要があります。',
    'enable_username_sync' => 'Enable username sync?',
    'enable_username_sync_info' => 'If enabled, website usernames will be updated to match ingame usernames.',

	// File uploads
	'drag_files_here' => 'アップロードするファイルをここにドラッグします。',
	'invalid_file_type' => '無効なファイルタイプです！',
	'file_too_big' => 'ファイルが大きすぎます！ あなたのファイルは {{filesize}} であり、上限は {{maxFilesize}} です', // Don't replace {{filesize}} or {{maxFilesize}}
	'allowed_proxies' => '許可されるプロキシ',
	'allowed_proxies_info' => '許可されたプロキシIPの行区切りリスト。',

	// Error logs
	'error_logs' => 'エラーログ',
	'notice_log' => '通知ログ',
	'warning_log' => '警告ログ',
	'custom_log' => 'カスタムログ',
	'other_log' => 'その他のログ',
	'fatal_log' => '致命的なログ',
	'log_file_not_found' => 'ログファイルが見つかりませんでした。',

	// Hooks
	'discord_hooks' => 'Discord Hooks',
	'discord_hooks_info' => 'あなたのサイトで何か変化が起こった時 Discord チャンネルにメッセージを送ります。 \'Discord サーバー設定 - > Webhooks -> Webhookを作成で\' Webhooks を作成できます。',
	'discord_hook_url' => 'Discord Webhook リンク',
	'discord_hook_events' => 'Discord Hook イベントが有効です。 (複数のイベントを選択するには Ctrl を押しながらクリック)',
	'register_hook_info' => 'ユーザー登録',
	'validate_hook_info' => 'ユーザー検証',

	// Sitemap
	'unable_to_load_sitemap_file_x' => 'Unable to load sitemap file {x}', // Don't replace {x}
	'sitemap_generated' => 'Sitemap generated successfully',
	'sitemap_not_writable' => 'The <strong>cache/sitemaps</strong> directory is not writable.',
	'cache_not_writable' => 'The <strong>cache</strong> directory is not writable.',
	'generate_sitemap' => 'Generate Sitemap',
	'download_sitemap' => 'Download Sitemap',
	'sitemap_not_generated_yet' => 'A sitemap has not been generated yet!',
	'sitemap_last_generated_x' => 'The sitemap was last generated {x}', // Don't replace {x}

	// Page metadata
	'page_metadata' => 'Page Metadata',
	'metadata_page_x' => 'Viewing metadata for page {x}', // Don't replace {x}
	'keywords' => 'Keywords',
	'description_max_500' => 'The description must be at most 500 characters.',
);
