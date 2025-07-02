## Enfoque

Usamos un puntero k para marcar la posición del próximo valor único.

Iteramos desde el segundo elemento.

Comparamos nums[i] con nums[k - 1]

Si son distintos, copiamos nums[i] en nums[k] y avanzamos k

De este modo, todos los valores únicos quedan al principio de nums.

## Complejidad

Tiempo: O(n)

Espacio: O(1)
