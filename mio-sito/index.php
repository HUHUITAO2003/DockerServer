<?php
$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
  case 'PUT':
    do_something_with_put($request);  
    break;
  case 'POST':
    do_something_with_post($request);  
    break;
  case 'GET':
    header('content-type: application/json');
    echo "
    {
      '_embedded': {
        'employees': [
          {
            'id': 10001,
            'birthDate': '1953-09-02',
            'firstName': 'Georgi',
            'lastName': 'Facello',
            'gender': 'M',
            'hireDate': '1986-06-26',
            '_links': {
              'self': {
                'href': 'http://localhost:8081/employees/10001'
              },
              'employee': {
                'href': 'http://localhost:8081/employees/10001'
              }
            }
          },
          {
            'id': 10002,
            'birthDate': '1964-06-02',
            'firstName': 'Bezalel',
            'lastName': 'Simmel',
            'gender': 'F',
            'hireDate': '1985-11-21',
            '_links': {
              'self': {
                'href': 'http://localhost:8081/employees/10002'
              },
              'employee': {
                'href': 'http://localhost:8081/employees/10002'
              }
            }
          },
          {
            'id': 10003,
            'birthDate': '1959-12-03',
            'firstName': 'Parto',
            'lastName': 'Bamford',
            'gender': 'M',
            'hireDate': '1986-08-28',
            '_links': {
              'self': {
                'href': 'http://localhost:8081/employees/10003'
              },
              'employee': {
                'href': 'http://localhost:8081/employees/10003'
              }
            }
          },
          {
            'id': 10004,
            'birthDate': '1954-05-01',
            'firstName': 'Chirstian',
            'lastName': 'Koblick',
            'gender': 'M',
            'hireDate': '1986-12-01',
            '_links': {
              'self': {
                'href': 'http://localhost:8081/employees/10004'
              },
              'employee': {
                'href': 'http://localhost:8081/employees/10004'
              }
            }
          },
          {
            'id': 10005,
            'birthDate': '1955-01-21',
            'firstName': 'Kyoichi',
            'lastName': 'Maliniak',
            'gender': 'M',
            'hireDate': '1989-09-12',
            '_links': {
              'self': {
                'href': 'http://localhost:8081/employees/10005'
              },
              'employee': {
                'href': 'http://localhost:8081/employees/10005'
              }
            }
          },
          {
            'id': 10006,
            'birthDate': '1953-04-20',
            'firstName': 'Anneke',
            'lastName': 'Preusig',
            'gender': 'F',
            'hireDate': '1989-06-02',
            '_links': {
              'self': {
                'href': 'http://localhost:8081/employees/10006'
              },
              'employee': {
                'href': 'http://localhost:8081/employees/10006'
              }
            }
          },
          {
            'id': 10007,
            'birthDate': '1957-05-23',
            'firstName': 'Tzvetan',
            'lastName': 'Zielinski',
            'gender': 'F',
            'hireDate': '1989-02-10',
            '_links': {
              'self': {
                'href': 'http://localhost:8081/employees/10007'
              },
              'employee': {
                'href': 'http://localhost:8081/employees/10007'
              }
            }
          },
          {
            'id': 10008,
            'birthDate': '1958-02-19',
            'firstName': 'Saniya',
            'lastName': 'Kalloufi',
            'gender': 'M',
            'hireDate': '1994-09-15',
            '_links': {
              'self': {
                'href': 'http://localhost:8081/employees/10008'
              },
              'employee': {
                'href': 'http://localhost:8081/employees/10008'
              }
            }
          },
          {
            'id': 10009,
            'birthDate': '1952-04-19',
            'firstName': 'Sumant',
            'lastName': 'Peac',
            'gender': 'F',
            'hireDate': '1985-02-18',
            '_links': {
              'self': {
                'href': 'http://localhost:8081/employees/10009'
              },
              'employee': {
                'href': 'http://localhost:8081/employees/10009'
              }
            }
          },
          {
            'id': 10010,
            'birthDate': '1963-06-01',
            'firstName': 'Duangkaew',
            'lastName': 'Piveteau',
            'gender': 'F',
            'hireDate': '1989-08-24',
            '_links': {
              'self': {
                'href': 'http://localhost:8081/employees/10010'
              },
              'employee': {
                'href': 'http://localhost:8081/employees/10010'
              }
            }
          },
          {
            'id': 10011,
            'birthDate': '1953-11-07',
            'firstName': 'Mary',
            'lastName': 'Sluis',
            'gender': 'F',
            'hireDate': '1990-01-22',
            '_links': {
              'self': {
                'href': 'http://localhost:8081/employees/10011'
              },
              'employee': {
                'href': 'http://localhost:8081/employees/10011'
              }
            }
          },
          {
            'id': 10012,
            'birthDate': '1960-10-04',
            'firstName': 'Patricio',
            'lastName': 'Bridgland',
            'gender': 'M',
            'hireDate': '1992-12-18',
            '_links': {
              'self': {
                'href': 'http://localhost:8081/employees/10012'
              },
              'employee': {
                'href': 'http://localhost:8081/employees/10012'
              }
            }
          },
          {
            'id': 10013,
            'birthDate': '1963-06-07',
            'firstName': 'Eberhardt',
            'lastName': 'Terkki',
            'gender': 'M',
            'hireDate': '1985-10-20',
            '_links': {
              'self': {
                'href': 'http://localhost:8081/employees/10013'
              },
              'employee': {
                'href': 'http://localhost:8081/employees/10013'
              }
            }
          },
          {
            'id': 10014,
            'birthDate': '1956-02-12',
            'firstName': 'Berni',
            'lastName': 'Genin',
            'gender': 'M',
            'hireDate': '1987-03-11',
            '_links': {
              'self': {
                'href': 'http://localhost:8081/employees/10014'
              },
              'employee': {
                'href': 'http://localhost:8081/employees/10014'
              }
            }
          },
          {
            'id': 10015,
            'birthDate': '1959-08-19',
            'firstName': 'Guoxiang',
            'lastName': 'Nooteboom',
            'gender': 'M',
            'hireDate': '1987-07-02',
            '_links': {
              'self': {
                'href': 'http://localhost:8081/employees/10015'
              },
              'employee': {
                'href': 'http://localhost:8081/employees/10015'
              }
            }
          },
          {
            'id': 10016,
            'birthDate': '1961-05-02',
            'firstName': 'Kazuhito',
            'lastName': 'Cappelletti',
            'gender': 'M',
            'hireDate': '1995-01-27',
            '_links': {
              'self': {
                'href': 'http://localhost:8081/employees/10016'
              },
              'employee': {
                'href': 'http://localhost:8081/employees/10016'
              }
            }
          },
          {
            'id': 10017,
            'birthDate': '1958-07-06',
            'firstName': 'Cristinel',
            'lastName': 'Bouloucos',
            'gender': 'F',
            'hireDate': '1993-08-03',
            '_links': {
              'self': {
                'href': 'http://localhost:8081/employees/10017'
              },
              'employee': {
                'href': 'http://localhost:8081/employees/10017'
              }
            }
          },
          {
            'id': 10018,
            'birthDate': '1954-06-19',
            'firstName': 'Kazuhide',
            'lastName': 'Peha',
            'gender': 'F',
            'hireDate': '1987-04-03',
            '_links': {
              'self': {
                'href': 'http://localhost:8081/employees/10018'
              },
              'employee': {
                'href': 'http://localhost:8081/employees/10018'
              }
            }
          },
          {
            'id': 10019,
            'birthDate': '1953-01-23',
            'firstName': 'Lillian',
            'lastName': 'Haddadi',
            'gender': 'M',
            'hireDate': '1999-04-30',
            '_links': {
              'self': {
                'href': 'http://localhost:8081/employees/10019'
              },
              'employee': {
                'href': 'http://localhost:8081/employees/10019'
              }
            }
          },
          {
            'id': 10020,
            'birthDate': '1952-12-24',
            'firstName': 'Mayuko',
            'lastName': 'Warwick',
            'gender': 'M',
            'hireDate': '1991-01-26',
            '_links': {
              'self': {
                'href': 'http://localhost:8081/employees/10020'
              },
              'employee': {
                'href': 'http://localhost:8081/employees/10020'
              }
            }
          }
        ]
      },
      '_links': {
        'first': {
          'href': 'http://localhost:8081/employees?page=0&size=20'
        },
        'self': {
          'href': 'http://localhost:8081/employees{?page,size,sort}',
          'templated': true
        },
        'next': {
          'href': 'http://localhost:8081/employees?page=1&size=20'
        },
        'last': {
          'href': 'http://localhost:8081/employees?page=15001&size=20'
        },
        'profile': {
          'href': 'http://localhost:8081/profile/employees'
        }
      },
      'page': {
        'size': 20,
        'totalElements': 300024,
        'totalPages': 15002,
        'number': 0
      }
    }";
    break;
  case 'GET':
    do_something_with_get($request);  
  break;
  
  default:
    handle_error($request);  
    break;
}







?>