--Lektion 1 
--Aufgabe 1

SELECT last_name, job_id, salaray AS SAL
FROM employees;
--Funktioniert


--Aufgabe 2

--SELECT * FROM job_grades
--Funktioniert nicht

--Aufgabe 3

SELECT employee_id, last_name, salary * 12 "ANNUAL SALARY"

--Part 2
--Aufagbe 1

DESCRIBE DEPARTMENTS;

--Aufgabe 2

SELECT employee_id, last_name, job_id, hire_date "STARTDATE" FROM employees;  

--Aufgabe 3

SELECT #job_id FROM employees;