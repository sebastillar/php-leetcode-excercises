# 121. Mejor momento para comprar y vender acciones

Dado un array `prices` donde `prices[i]` representa el precio de una acción en el día `i`, encontrá el **máximo beneficio posible** si comprás una sola vez y luego vendés en el futuro.

---

## 📌 Ejemplos

### Ejemplo 1

```text
Entrada: prices = [7,1,5,3,6,4]
Salida: 5
Explicación: Comprás a 1 y vendés a 6 → ganancia = 5
```

### Ejemplo 2

```text
Entrada: prices = [7,6,4,3,1]
Salida: 0
Explicación: Nunca se puede obtener ganancia
```

---

## 💡 Solución optimizada

Recorremos el array **una sola vez**, manteniendo:

- `minPrice`: el precio mínimo visto hasta el momento
- `maxProfit`: la máxima ganancia posible hasta ese punto

```php
$minPrice = PHP_INT_MAX;
$maxProfit = 0;

foreach ($prices as $price) {
    if ($price < $minPrice) {
        $minPrice = $price;
    } else {
        $maxProfit = max($maxProfit, $price - $minPrice);
    }
}
```

---

## 🧠 ¿Por qué se considera Programación Dinámica?

Aunque no usamos arrays explícitamente, el enfoque sigue los principios de la programación dinámica:

- Divide el problema en subproblemas (mínimo hasta el día `i`)
- Usa resultados previos (`minPrice`) para construir la solución
- Optimiza espacio usando solo variables escalares → **O(1)**

---

## ⏱️ Complejidad

- Tiempo: **O(n)**
- Espacio: **O(1)**

---

## 🧪 Cómo ejecutar el test

```bash
./run.sh 0121-best-time-to-buy-and-sell-stock
```
