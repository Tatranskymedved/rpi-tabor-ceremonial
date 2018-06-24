#!/usr/bin/env python
from pygame import mixer
import time

print 'init'
mixer.init()
mixer.pre_init(44100, -16, 2, 2048)
mixer.music.load("/var/www/tabor/media/01.mp3")
mixer.music.play()
print 'playing'
while True: time.sleep(0.2)
