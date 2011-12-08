# Server

	node node-tail-server.js

# Client

## [Listen](https://github.com/teddziuba/hubot/blob/master/bin/adapters/campfire):

	firefox http://localhost:4000/

	wget http://localhost:4000 -O /tmp/out
	tail -f /tmp/out

	curl http://localhost:4000

## Say

Goto http://localhost/index.html and fill in the input.

Or:

	curl -F "say=hello" http://localhost/write.php
