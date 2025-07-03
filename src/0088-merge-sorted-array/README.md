# 88. Fusionar Arrays Ordenados

Se te dan dos arrays de enteros `nums1` y `nums2`, ordenados en orden no decreciente, y dos enteros `m` y `n` que representan la cantidad de elementos válidos en `nums1` y `nums2` respectivamente.

Fusioná `nums2` dentro de `nums1` como un solo array ordenado **in-place** (dentro del mismo array sin usar espacio adicional).

> El array final ordenado no debe ser retornado por la función, sino que debe almacenarse directamente en `nums1`.  
> Para permitir esto, `nums1` tiene longitud `m + n`, donde los primeros `m` elementos son válidos y los últimos `n` son ceros que deben ser ignorados.  
> `nums2` tiene longitud `n`.

---

## 📌 Ejemplos

### Ejemplo 1:

```text
Entrada:
nums1 = [1,2,3,0,0,0], m = 3  
nums2 = [2,5,6], n = 3  

Salida:
[1,2,2,3,5,6]
```

### Ejemplo 2:

```text
Entrada:
nums1 = [1], m = 1  
nums2 = [], n = 0  

Salida:
[1]
```

### Ejemplo 3:

```text
Entrada:
nums1 = [0], m = 0  
nums2 = [1], n = 1  

Salida:
[1]
```

---

## 💡 Enfoque: Dos punteros desde el final

Para fusionar `nums2` dentro de `nums1` de forma eficiente, usamos tres punteros:

- `i` → último elemento válido en `nums1` (`m - 1`)
- `j` → último elemento en `nums2` (`n - 1`)
- `k` → última posición disponible en `nums1` (`m + n - 1`)

Iteramos desde atrás hacia adelante, colocando el valor más grande entre `nums1[i]` y `nums2[j]` en la posición `k`. Esto evita sobrescribir elementos válidos de `nums1`.

---

## 🔄 Diagrama paso a paso

Estado inicial:

```text
nums1 = [1,2,3,0,0,0], m = 3  
nums2 = [2,5,6], n = 3

i = 2 → nums1[2] = 3  
j = 2 → nums2[2] = 6  
k = 5 → última posición disponible
```

Proceso de mezcla:

```
Paso 1:
nums2[2] > nums1[2] → nums1[5] = 6
nums1 = [1,2,3,0,0,6]

Paso 2:
nums2[1] > nums1[2] → nums1[4] = 5
nums1 = [1,2,3,0,5,6]

Paso 3:
nums1[2] > nums2[0] → nums1[3] = 3
nums1 = [1,2,3,3,5,6]

Paso 4:
nums1[1] == nums2[0] → nums1[2] = 2
nums1 = [1,2,2,3,5,6]

Paso 5:
nums2 está vacío → finalizado
```

---

## ⏱️ Complejidad

- **Tiempo:** O(m + n)  
- **Espacio:** O(1)

Esta solución es óptima y cumple con la condición del "follow-up" del problema: realizar la operación en tiempo lineal y sin usar memoria adicional.

---

## 🧪 Cómo ejecutarlo

Desde la raíz del proyecto:

```bash
docker-compose run --rm app php 0088-merge-sorted-array/test.php
```

O si tenés el script `run.sh`:

```bash
./run.sh 0088-merge-sorted-array
```
