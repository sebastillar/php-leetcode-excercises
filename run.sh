#!/bin/bash

if [ -z "$1" ]; then
  echo "❌ Tenés que pasar el nombre del problema. Ejemplo:"
  echo "./run.sh 0026-remove-duplicates"
  exit 1
fi

docker-compose run --rm app php $1/test.php
