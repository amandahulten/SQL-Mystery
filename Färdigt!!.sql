SELECT *
FROM employees
INNER JOIN interview
ON employees.employee_id = interview.employee_id
WHERE profession = 'cleaner';

SELECT *
FROM facebook_profile
INNER JOIN office_check_in
ON facebook_profile.employee_id = office_check_in.employee_id
WHERE check_in BETWEEN 4 AND 6
AND hair_color = 'Khaki';