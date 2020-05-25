SELECT customers.customerName , COUNT(orders.customerNumber)
from orders join customers

on orders.customerNumber = customers.customerNumber

GROUP BY customerName

ORDER by COUNT(orders.customerNumber)DESC , customerName ASC
	limit $search ";
