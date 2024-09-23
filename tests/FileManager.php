<?php

use ZeppOS\devtools\hmSetting; // importing an analogue library from ZeppOS

// lib/mmk/Path.js
public $deviceID = hmSetting::getDeviceInfo()->deviceName; // https://docs.zepp.com/docs/watchface/api/hmSetting/getDeviceInfo/
public $isMiBand7 = $this->deviceID === "Xiaomi Smart Band 7"; // Returns true if this .bin app is running on Xiaomi Smart Band 7
public $appContext = __getApp(); // pre-generated.

// in dev...
