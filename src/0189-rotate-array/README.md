# 189. Rotar Array

Dado un array de enteros `nums`, rotarlo hacia la derecha `k` pasos. La rotación debe hacerse **in-place**, es decir, sin usar espacio adicional.

---

## 📌 Ejemplos

### Ejemplo 1

```text
Entrada: nums = [1,2,3,4,5,6,7], k = 3
Salida: [5,6,7,1,2,3,4]
```

### Ejemplo 2

```text
Entrada: nums = [-1,-100,3,99], k = 2
Salida: [3,99,-1,-100]
```

---

## 💡 Enfoque optimizado (Reverse en 3 pasos)

La rotación puede lograrse con una serie de **reversiones in-place**:

1. Invertimos todo el array
2. Invertimos los primeros `k` elementos
3. Invertimos los últimos `n - k` elementos

---

## 🐞 Ejemplo con Debug

Para `nums = [1,2,3,4,5,6,7]` y `k = 3`:

1. Invertimos todo: → [7,6,5,4,3,2,1]
2. Invertimos los primeros 3: → [5,6,7,4,3,2,1]
3. Invertimos del 4 al final: → [5,6,7,1,2,3,4]

✅ Resultado final: [5,6,7,1,2,3,4]

---

## ⏱️ Complejidad

- Tiempo: O(n)
- Espacio: O(1)

---

## 🧪 Cómo ejecutar el test

```bash
./run.sh 0189-rotate-array
```
