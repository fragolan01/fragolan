SELECT status, id_syscom, titulo, stock, inv_min, fecha, precio AS precio_hoy,  orden  
        FROM plataforma_ventas_temp AS t1 WHERE t1.fecha = 
        (SELECT MAX(t2.fecha) FROM plataforma_ventas_temp AS t2 WHERE t1.id_syscom = t2.id_syscom) 
        ORDER BY orden

SELECT fecha, precio AS precio_anterior
FROM plataforma_ventas_temp 
WHERE fecha > DATE_SUB(NOW(), INTERVAL 1 DAY);


/* Consulta en prueba */

SELECT t1.status, t1.id_syscom, t1.titulo, t1.stock, t1.inv_min, t1.fecha, t1.precio, t1.orden, t2.precio AS precio_dia_anterior
FROM plataforma_ventas_temp AS t1
JOIN (
    SELECT id_syscom, MAX(fecha) AS max_fecha,
           (SELECT precio 
            FROM plataforma_ventas_temp 
            WHERE id_syscom = t.id_syscom AND fecha < DATE_SUB(NOW(), INTERVAL 1 DAY) 
            ORDER BY fecha DESC LIMIT 1) AS precio
    FROM plataforma_ventas_temp AS t
    WHERE fecha >= DATE_SUB(NOW(), INTERVAL 1 DAY)
    GROUP BY id_syscom
) AS t2 ON t1.id_syscom = t2.id_syscom AND t1.fecha = t2.max_fecha
ORDER BY t1.orden;


/* Consulta FINAL CORRECTA */
SELECT 
    t1.status, 
    t1.id_syscom, 
    t1.titulo, 
    t1.stock, 
    t1.inv_min, 
    t1.fecha, 
    t1.precio AS precio_hoy, 
    t1.orden,
    (SELECT fecha FROM plataforma_ventas_temp WHERE id_syscom = t1.id_syscom AND fecha < t1.fecha ORDER BY fecha DESC LIMIT 1) AS fecha_anterior,
    (SELECT precio FROM plataforma_ventas_temp WHERE id_syscom = t1.id_syscom AND fecha < t1.fecha ORDER BY fecha DESC LIMIT 1) AS precio_anterior
FROM (
    SELECT 
        status, 
        id_syscom, 
        titulo, 
        stock, 
        inv_min, 
        fecha, 
        precio, 
        orden,
        ROW_NUMBER() OVER (PARTITION BY id_syscom ORDER BY fecha DESC) AS rn
    FROM plataforma_ventas_temp
) AS t1
WHERE t1.rn = 1
ORDER BY t1.orden;


/* Sin mostrar columna fecha anterior */
SELECT 
t1.orden,
t1.fecha,
t1.id_syscom, 
t1.titulo,
t1.stock, 
t1.inv_min, 
t1.status, 
t1.precio AS precio_hoy, 
(SELECT precio FROM plataforma_ventas_temp WHERE id_syscom = t1.id_syscom AND fecha < t1.fecha ORDER BY fecha DESC LIMIT 1) AS precio_anterior
FROM (
SELECT 
    status, 
    id_syscom, 
    titulo, 
    stock, 
    inv_min, 
    fecha, 
    precio, 
    orden,
    ROW_NUMBER() OVER (PARTITION BY id_syscom ORDER BY fecha DESC) AS rn
FROM plataforma_ventas_temp
) AS t1
WHERE t1.rn = 1
ORDER BY t1.orden
