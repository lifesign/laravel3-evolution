<?php 

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used
	| by the validator class. Some of the rules contain multiple versions,
	| such as the size (max, min, between) rules. These versions are used
	| for different input types such as strings and files.
	|
	| These language lines may be easily changed to provide custom error
	| messages in your application. Error messages for custom validation
	| rules may also be added to this file.
	|
	*/

	"accepted"         => "必须接受 :attribute",
    "active_url"       => ":attribute 必须是合法的URL地址",
    "after"            => ":attribute 必须是在 :date 之后的日期",
    "alpha"            => ":attribute 只能包含英文字母",
    "alpha_dash"       => ":attribute 只能包含英文字母,数字和减号",
    "alpha_num"        => ":attribute 只能包含英文字母和数字",
	"array"          => "The :attribute must have selected elements.",
	"before"           => ":attribute 必须是在 :date. 之前的日期",
    "between"          => array(
        "numeric" => ":attribute 必须在:min - :max之间",
        "file"    => ":attribute 大小必须在:min kb - :max kb 之间",
        "string"  => ":attribute 长度必须在:min - :max 之间",
    ),
    "confirmed"        => ":attribute 必须一致",
	"count"          => "The :attribute must have exactly :count selected elements.",
	"countbetween"   => "The :attribute must have between :min and :max selected elements.",
	"countmax"       => "The :attribute must have less than :max selected elements.",
	"countmin"       => "The :attribute must have at least :min selected elements.",
	"date_format"      => ":attribute 必须符合格式 :format",
    "different"        => ":attribute 必须和 :other 不同",
	"email"            => ":attribute 必须是合法的Email格式",
    "exists"           => ":attribute 不存在",
    "image"            => ":attribute 必须是图片",
	"in"               => ":attribute 不合法",
    "integer"          => ":attribute 必须是整数",
    "ip"               => ":attribute 必须是合法的IP地址",
	"match"          => "The :attribute format is invalid.",
	"max"              => array(
        "numeric" => ":attribute 不能大于 :max",
        "file"    => ":attribute 文件大小不能大于 :max kb",
        "string"  => ":attribute 长度不能大于 :max",
    ),
    "mimes"            => ":attribute 文件格式必须是 :values 其中之一",
    "min"              => array(
        "numeric" => ":attribute 不能小于 :min",
        "file"    => ":attribute 文件大小不能小于 :min kb",
        "string"  => ":attribute 长度不能大于 :min",
    ),
    "not_in"           => ":attribute 不合法",
    "numeric"          => ":attribute 必须是数字",
	"required"         => ":attribute 必须填写",
    "required_with"    => ":values 填写了的时候也必须填写 :attribute",
    "same"            => ":attribute 必须和 :other 相同",
    "size"             => array(
        "numeric" => ":attribute 位数必须是 :size",
        "file"    => ":attribute 大小必须是 :size kb",
        "string"  => ":attribute 长度必须为 :size characters",
    ),
    "unique"           => ":attribute 已经存在了",
    "url"              => ":attribute 格式不正确",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute_rule" to name the lines. This helps keep your
	| custom validation clean and tidy.
	|
	| So, say you want to use a custom validation message when validating that
	| the "email" attribute is unique. Just add "email_unique" to this array
	| with your custom message. The Validator will handle the rest!
	|
	*/

	'custom' => array(),

	/*
	|--------------------------------------------------------------------------
	| Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as "E-Mail Address" instead
	| of "email". Your users will thank you.
	|
	| The Validator class will automatically search this array of lines it
	| is attempting to replace the :attribute place-holder in messages.
	| It's pretty slick. We think you'll like it.
	|
	*/

	'attributes' => array(),

);
