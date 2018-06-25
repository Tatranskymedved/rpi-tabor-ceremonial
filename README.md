# rpi-tabor-ceremonial
Repository used to hold source code of webpage (html/css/js/php) for the controlling of Raspberry PI (RPI).

System use Bootstrap for the front end.

Backend is for directly pushing commands to the RPI to control sound, LED and some more.


This document will try to sumarize what else is needed to setup RPI to the same standard.


#WIFI:

https://frillip.com/using-your-raspberry-pi-3-as-a-wifi-access-point-with-hostapd/


#Music

Required

1. mpd (music player daemon)
2. mpc (music player client)
3. music files (e.g. *.MP3)


#LED

https://github.com/bigjosh/SimpleNeoPixelDemo - long LED strip

http://raspi.tv/2013/rpi-gpio-0-5-2a-now-has-software-pwm-how-to-use-it - SW PWM RPI

https://circuitdigest.com/microcontroller-projects/raspberry-pi-pwm-tutorial - HW PWM RPI

https://tutorials-raspberrypi.com/connect-control-raspberry-pi-ws2812-rgb-led-strips/ - HW PWM RPI


Circuits

https://raspberrypi.stackexchange.com/questions/53276/control-5m-of-ws2812-led-strip-wire-it-up

https://electronics.stackexchange.com/questions/251527/simple-circuit-with-transistor-using-raspberry-pi

