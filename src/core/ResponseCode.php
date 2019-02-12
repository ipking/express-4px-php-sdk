<?php

namespace express_4px\core;

abstract class ResponseCode{
	const TYPE_INFO = 'information';
	const TYPE_SUCCESS = 'success';
	const TYPE_REDIRECT = 'redirect';
	const TYPE_CLIENT_ERROR = 'client error';
	const TYPE_SERVER_ERROR = 'server error';
	
	//information
	const CODE_CONTINUE = 100;
	const CODE_SWITCHING_PROTOCOLS = 101;
	
	//success
	const CODE_OK = 200;
	const CODE_CREATED = 201;
	const CODE_ACCEPTED = 202;
	const CODE_NON_AUTHORITATIVE_INFORMATION = 203;
	const CODE_NO_CONTENT = 204;
	const CODE_RESET_CONTENT = 205;
	const CODE_PARTIAL_CONTENT = 206;
	
	//redirect
	const CODE_MULTIPLE_CHOICES = 300;
	const CODE_MOVED_PERMANENTLY = 301;
	const CODE_MOVED_TEMPORARILY = 302;
	const CODE_SEE_OTHER = 303;
	const CODE_NOT_MODIFIED = 304;
	const CODE_USE_PROXY = 305;
	const CODE_TEMPORARY_REDIRECT = 307;
	
	//client error
	const CODE_BAD_REQUEST = 400;
	const CODE_UNAUTHORIZED = 401;
	const CODE_PAYMENT_REQUIRED = 402;
	const CODE_FORBIDDEN = 403;
	const CODE_NOT_FOUND = 404;
	const CODE_METHOD_NOT_ALLOWED = 405;
	const CODE_NOT_ACCEPTABLE = 406;
	const CODE_PROXY_AUTHENTICATION_REQUIRED = 407;
	const CODE_REQUEST_TIMEOUT = 408;
	const CODE_CONFLICT = 409;
	const CODE_GONE = 410;
	const CODE_LENGTH_REQUIRED = 411;
	const CODE_PRECONDITION_FAILED = 412;
	const CODE_REQUEST_ENTITY_TOO_LARGE = 413;
	const CODE_REQUEST_URI_TOO_LONG = 414;
	const CODE_UNSUPPORTED_MEDIA_TYPE = 415;
	const CODE_REQUESTED_RANGE_NOT_SATISFIABLE = 416;
	const CODE_EXPECTATION_FAILED = 417;
	
	//server error
	const CODE_INTERNAL_SERVER_ERROR = 500;
	const CODE_NOT_IMPLEMENTED = 501;
	const CODE_BAD_GATEWAY = 502;
	const CODE_SERVICE_UNAVAILABLE = 503;
	const CODE_GATEWAY_TIMEOUT = 504;
	const CODE_HTTP_VERSION_NOT_SUPPORTED = 505;
	const CODE_BANDWIDTH_LIMIT_EXCEEDED = 509;

	//business error
	const CODE_PARAMETER_ERROR = 600;
	
	static $codeMessageMap = array(
		self::CODE_CONTINUE                        => 'Continue',
		self::CODE_SWITCHING_PROTOCOLS             => 'Switching Protocols',
		self::CODE_OK                              => 'OK',
		self::CODE_CREATED                         => 'Created',
		self::CODE_ACCEPTED                        => 'Accepted',
		self::CODE_NON_AUTHORITATIVE_INFORMATION   => 'Non-Authoritative Information',
		self::CODE_NO_CONTENT                      => 'No Content',
		self::CODE_RESET_CONTENT                   => 'Reset Content',
		self::CODE_PARTIAL_CONTENT                 => 'Partial Content',
		self::CODE_MULTIPLE_CHOICES                => 'Multiple Choices',
		self::CODE_MOVED_PERMANENTLY               => 'Moved Permanently',
		self::CODE_MOVED_TEMPORARILY               => 'Moved Temporarily ',
		self::CODE_SEE_OTHER                       => 'See Other',
		self::CODE_NOT_MODIFIED                    => 'Not Modified',
		self::CODE_USE_PROXY                       => 'Use Proxy',
		self::CODE_TEMPORARY_REDIRECT              => 'Temporary Redirect',
		self::CODE_BAD_REQUEST                     => 'Bad Request',
		self::CODE_UNAUTHORIZED                    => 'Unauthorized',
		self::CODE_PAYMENT_REQUIRED                => 'Payment Required',
		self::CODE_FORBIDDEN                       => 'Forbidden',
		self::CODE_NOT_FOUND                       => 'Not Found',
		self::CODE_METHOD_NOT_ALLOWED              => 'Method Not Allowed',
		self::CODE_NOT_ACCEPTABLE                  => 'Not Acceptable',
		self::CODE_PROXY_AUTHENTICATION_REQUIRED   => 'Proxy Authentication Required',
		self::CODE_REQUEST_TIMEOUT                 => 'Request Timeout',
		self::CODE_CONFLICT                        => 'Conflict',
		self::CODE_GONE                            => 'Gone',
		self::CODE_LENGTH_REQUIRED                 => 'Length Required',
		self::CODE_PRECONDITION_FAILED             => 'Precondition Failed',
		self::CODE_REQUEST_ENTITY_TOO_LARGE        => 'Request Entity Too Large',
		self::CODE_REQUEST_URI_TOO_LONG            => 'Request-URI Too Long',
		self::CODE_UNSUPPORTED_MEDIA_TYPE          => 'Unsupported Media Type',
		self::CODE_REQUESTED_RANGE_NOT_SATISFIABLE => 'Requested Range Not Satisfiable',
		self::CODE_EXPECTATION_FAILED              => 'Expectation Failed',
		self::CODE_INTERNAL_SERVER_ERROR           => 'Internal Server Error',
		self::CODE_NOT_IMPLEMENTED                 => 'Not Implemented',
		self::CODE_BAD_GATEWAY                     => 'Bad Gateway',
		self::CODE_SERVICE_UNAVAILABLE             => 'Service Unavailable',
		self::CODE_GATEWAY_TIMEOUT                 => 'Gateway Timeout',
		self::CODE_HTTP_VERSION_NOT_SUPPORTED      => 'HTTP Version Not Supported',
		self::CODE_BANDWIDTH_LIMIT_EXCEEDED        => 'Bandwidth Limit Exceeded',
		self::CODE_PARAMETER_ERROR                 => 'Parameter Error',
	);
	
	/**
	 * 获取状态码归类
	 * @param $code
	 * @return mixed|null
	 */
	public static function getCodeType($code){
		$type_map = [
			'1' => self::TYPE_INFO,
			'2' => self::TYPE_SUCCESS,
			'3' => self::TYPE_REDIRECT,
			'4' => self::TYPE_CLIENT_ERROR,
			'5' => self::TYPE_SERVER_ERROR,
		];
		$first_letter = substr($code, 0, 1);
		if($type_map[$first_letter]){
			return $type_map[$first_letter];
		}
		return null;
	}
}