<?php
	/*
	 *  Copyright 2019 Christopher Dangerfield (DL200010 <DL200010@gmail.com>)
	 *
	 *  Licensed under the Apache License, Version 2.0 (the "License");
	 *  you may not use this file except in compliance with the License.
	 *  You may obtain a copy of the License at
	 *
	 *      http://www.apache.org/licenses/LICENSE-2.0
	 *
	 *  Unless required by applicable law or agreed to in writing, software
	 *  distributed under the License is distributed on an "AS IS" BASIS,
	 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
	 *  See the License for the specific language governing permissions and
	 *  limitations under the License.
	 */

	//here will be the functions part where each function will be mapped to a folder
	//this file can be excluded as long as the function exactly matches the folder name
	switch ($flexaction['function']) {
		case 'home':
			$flexaction['function_folder'] = "/";
			break;
		case 'elements':
			$flexaction['function_folder'] = "/elements/";
			break;
		case 'generic':
			$flexaction['function_folder'] = "/generic/";
			break;
	}
?>