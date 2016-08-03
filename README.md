```
docker-compose up -d
```

Visit you browser at <docker-ip.:8080.
See a hash that represents the hostname of the one PHP-FPM app server that is
running through the load balancer.

```
docker-compose scale php=2
```

Now visit your browser again at the same address and reload the page a few
times. You will see that the hash changes. There are now two nodes running that
are load balanced.
