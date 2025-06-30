#!/bin/bash

if [ -z "$1" ]; then
  echo "❌ Debes pasar el nombre del problema (ej: 0088-merge-sorted-array)"
  exit 1
fi

docker-compose run --rm app php src/$1/test.php
