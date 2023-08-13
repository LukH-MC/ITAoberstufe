//Aufgabe 1

SELECT last_name, salary
FROM employees
WHERE salary >= 12000;

//Aufgabe 2

DEFINE employee_num_176 = 176
SELECT last_name, department_id
FROM employees
WHERE employee_id = &employee_num_176;
UNDEFINE employee_num_176

//Aufgabe 3

SELECT last_name, salary
FROM employees
WHERE salary NOT BETWEEN 5000 AND 12000;

//Aufgabe 4

SELECT last_name, job_id, hire_date
FROM employees
WHERE last_name = 'Matos'
OR last_name = 'Taylor'
ORDER BY hire_date ASC;

//Aufgabe 5

SELECT last_name, department_id
FROM employees
WHERE department_id = 20 
OR department_id = 50
ORDER BY last_name ASC;

//Aufgabe 6

SELECT last_name AS Employee, salary AS Monthly_Salary
FROM employees
WHERE department_id = 20
OR department_id = 50
AND salary BETWEEN 5000 AND 12000;

//Aufgabe 7

SELECT last_name, hire_date
FROM employees
WHERE hire_date LIKE '%94';

//Aufgabe 8

SELECT last_name, job_id
FROM employees
WHERE manager_id IS NULL;

//Aufgabe 9

SELECT last_name, salary, commission_pct
FROM employees
WHERE commission_pct IS NOT NULL
ORDER BY 2;

//Aufgabe 10

SELECT last_name, salary
FROM employees
WHERE salary >= &salary;

//Aufgabe 11

SELECT employee_id, last_name, salary, department_id
FROM employees
WHERE manager_id = &manager
ORDER BY &collum_name;

//Aufgabe 12

SELECT last_name
FROM employees
WHERE last_name LIKE '__a%';

//Aufgabe 13

SELECT last_name
FROM employees
WHERE last_name LIKE '%a%'
AND last_name LIKE '%e%';

//Aufgabe 14

SELECT last_name, job_id, salary
FROM employees
WHERE job_id = 'SA_REP'
OR job_id = 'ST_CLERK'
AND salary <> 2500
AND salary <> 3500
AND salary <> 7000;

//Aufgabe 15

SELECT last_name AS Employee, salary AS Monthly_Salary, commission_pct
FROM employees
WHERE department_id = 20
OR department_id = 50
AND salary BETWEEN 5000 AND 12000
AND commission_pct = 0.2;