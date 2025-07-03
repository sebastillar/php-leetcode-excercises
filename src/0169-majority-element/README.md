# 169. Elemento Mayoritario (Majority Element)

Dado un array `nums` de tamaño `n`, retorná el **elemento mayoritario**, es decir, el elemento que aparece **más de ⌊n / 2⌋ veces**. Podés asumir que **siempre existe** dicho elemento.

---

## 📌 Ejemplos

### Ejemplo 1

```text
Entrada: nums = [3,2,3]
Salida: 3
```

### Ejemplo 2

```text
Entrada: nums = [2,2,1,1,1,2,2]
Salida: 2
```

---

## 💡 Enfoque optimizado

Usamos el algoritmo de **Boyer-Moore Voting**, que permite encontrar el elemento mayoritario en:

- ⏱️ Tiempo: **O(n)**
- 🧠 Espacio: **O(1)**

Este algoritmo mantiene un **candidato actual** y un **contador**. Si el contador cae a 0, se cambia de candidato. El candidato final es el mayoritario.

---

## 🧪 Cómo correr el test

```bash
./run.sh 0169-majority-element
```
