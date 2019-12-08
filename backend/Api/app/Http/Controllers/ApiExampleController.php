<?php

/**
 *  Classe: ApiExampleController
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiExampleController extends Controller
{

  public function getExample()
  {
    echo "
    <h3>Rotas configuradas: </h3><br>
    <p><strong>User Developer get:</strong>/user/d/{id}</p>
    <h5>Exemplo:</h5>
    <p>localhost:4000/user/d/5ddbf3db0ea32b1ab56942ad</p>
    <h5>Resposta:</h5>
    <pre>
     [
       {
         \"_id\":
          {
            \"\$oid\":\"5ddbf3db0ea32b1ab56942ad\"
          },
          \"email\":\"john@exemple.com\",
          \"name\":\"john doe\",
          \"password\":\"1234\",
          \"tags\":[\"\"],
          \"following\":[\"\"],
          \"active\":true,
          \"thumbnail\":\"\",
          \"ocupation\":\"\",
          \"birthDate\":\"\",
          \"description\":\"\",
          \"registerDay\":
            {
              \"\$timestamp\":
              {
                \"t\":1574696072,
                \"i\":1
              }
            },
            \"locale\":\"\"
        }
      ]
    </pre>
    
    <p><strong>User Developer post:</strong>/user/d/</p>
    <h5>Exemplo:</h5>
    <p>localhost:4000/user/d/</p>
    <h5>Corpo esperado:</h5>
    <pre>
    {
      \"name\":\"John Doe\",
      \"email\":\"john@example.com\",
      \"password\":\"strongpsw\",
      \"tag\": [],
      \"following\":[],
      \"active\":true,
      \"thumbnail\":\"\",
      \"ocupation\": \"\",
      \"birthDate\":\"\",
      \"description\": \"\",
      \"locale\":\"\"
    }
    </pre>
    <br>

    <p><strong>User Startup get:</strong>/user/s/{id}</p>
    <h5>Exemplo:</h5>
    <p>localhost:4000/user/s/5ddbf4ea0ea32b1ab56942ae</p>
    <h5>Resposta:</h5>
    <pre>
     [
       {
         \"_id\":
          {
            \"\$oid\":\"5ddbf4ea0ea32b1ab56942ae\"
          },
          \"email\":\"condev@condev.com\",
          \"name\":\"condev\",
          \"password\":\"5151\",
          \"tags\":[\"\"],
          \"followers\":[\"\"],
          \"active\":true,
          \"thumbnail\":\"\",
          \"employeesNumb\": \"1\",
          \"description\":\"\",
          \"registerDay\":
            {
              \"\$timestamp\":
              {
                \"t\":1574696355,
                \"i\":1
              }
            },
            \"locale\":\"\"
        }
      ]
    </pre>
    
    <p><strong>User Startup post:</strong>/user/s/</p>
    <h5>Exemplo:</h5>
    <p>localhost:4000/user/s/</p>
    <h5>Corpo esperado:</h5>
    <pre>
    {
      \"name\":\"condev startup\",
      \"cep\":\"12412312\",
      \"password\":\"strongpsw\",
      \"email\":\"jovem@condev.com\",
      \"description\": \"\",
      \"tag\": [],
      \"active\":true,
      \"locale\":\"\"
      \"thumbnail\":\"\",
      \"companySize\": \"1\",
      \"CNPJ\":\"1235234\"
    }
    </pre>
    
    <p><strong>User Chat All get:</strong>/user/{user_id}/c/</p>
    <h5>Exemplo:</h5>
    <p>localhost:4000/user/5ddbf90b0ea32b1ab56942b3/c/</p>
    <h5>Resposta:</h5>
    <pre>
    [
      {
        \"_id\": {
          \"\$oid\": \"5ddbf72b0ea32b1ab56942af\"
        },
        \"users\": [
          {
            \"_id\": {
              \"\$oid\": \"5ddbf90b0ea32b1ab56942b3\"
            }
          }
        ],
        \"caption\": \"\",
        \"registerDay\": {
          \"\$timestamp\": {
            \"t\": 1574696920,
            \"i\": 1
          }
        },
        \"messages\": [
          {
            \"_id\": {
              \"\$oid\": \"5ddbf8210ea32b1ab56942b1\"
            }
          },
          {
            \"_id\": {
              \"\$oid\": \"5ddbfafe292eb11ab5ea9fb4\"
            }
          }
        ],
        \"blocked\": false
      }
    ]
    </pre>
    
    <p><strong>User Chat get:</strong>/user/{user_id}/c/{chat_id}</p>
    <h5>Exemplo:</h5>
    <p>localhost:4000/user/5ddbf90b0ea32b1ab56942b3/c/5ddbf72b0ea32b1ab56942af</p>
    <h5>Resposta:</h5>
    <pre>
    [
      {
        \"_id\": {
          \"\$oid\": \"5ddbf72b0ea32b1ab56942af\"
        },
        \"users\": [
          {
            \"_id\": {
              \"\$oid\": \"5ddbf90b0ea32b1ab56942b3\"
            }
          }
        ],
        \"caption\": \"\",
        \"registerDay\": {
          \"\$timestamp\": {
            \"t\": 1574696920,
            \"i\": 1
          }
        },
        \"messages\": [
          {
            \"_id\": {
              \"\$oid\": \"5ddbf8210ea32b1ab56942b1\"
            }
          },
          {
            \"_id\": {
              \"\$oid\": \"5ddbfafe292eb11ab5ea9fb4\"
            }
          }
        ],
        \"blocked\": false
      }
    ]
    </pre>
    
    <p><strong>User Chat post:</strong>/user/{user_id}/c/</p>
    <h5>Exemplo:</h5>
    <p>localhost:4000/user/5ddbf90b0ea32b1ab56942b3/c/
    <h5>Corpo esperado:</h5>
    <pre>
    {
      \"caption\": \"testando outro post\",
      \"messages\": [],
      \"blocked\": false
    }
    </pre>";
  }
}