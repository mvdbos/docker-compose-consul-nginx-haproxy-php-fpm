Percentage memory usage per php container
```
container_memory_usage_bytes{com_docker_compose_service="php", id=~"/docker.*",job="cadvisor"}/container_spec_memory_limit_bytes*100
```

CPU percentage per php container
```
sum(irate(container_cpu_usage_seconds_total{com_docker_compose_service="php"}[5m])) by (com_docker_compose_service, name) *100
```
