# Server

	node node-tail-server.js

# Client

## [Listen](https://github.com/teddziuba/hubot/blob/master/bin/adapters/campfire):

	firefox http://localhost:4000/

	wget http://localhost:4000 -O /tmp/out
	tail -f /tmp/out


Note sure how to iterate through output

	curl http://localhost:4000

## Say

Goto http://localhost/index.html and fill in the input.

Or:

	curl -F "say=hello" http://localhost/say.php


# Issues

* Sockets seems to drop out of a while. Is there a better pubsub model to use?

# Ideas

* Convert IRC bots like [RRSAgent](http://www.w3.org/2002/03/RRSAgent) productivity tool to this
* Write [hubot adaptor](https://github.com/teddziuba/hubot/tree/master/bin/adapters)
