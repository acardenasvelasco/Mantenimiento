package com.example.webservicessencillo;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.JsonArrayRequest;
import com.android.volley.toolbox.Volley;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

public class MainActivity extends AppCompatActivity {
EditText e1,e2,e3,e4,e5,e6;
Button buscar, ingreso, salir, informe;

RequestQueue requestQueue;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        relacionamosVistas();

        ingreso.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                startActivity(new Intent(MainActivity.this, MainActivity2.class));
            }
        });

        informe.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                startActivity(new Intent(MainActivity.this, MainActivity3.class));
            }
        });

        salir.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(Intent.ACTION_MAIN);
                intent.addCategory(Intent.CATEGORY_HOME);
                intent.setFlags(Intent.FLAG_ACTIVITY_NEW_TASK);
                startActivity(intent);
            }
        });


        buscar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                buscarUsuarios("http://www.sanedrac.info/android/buscar_ot.php?ingid="+e6.getText()+"");
            }
        });
    }
    public void relacionamosVistas(){
        e1=(EditText)findViewById(R.id.fecha);
        e2=(EditText)findViewById(R.id.cliente);
        e3=(EditText)findViewById(R.id.cliente2);
        e4=(EditText)findViewById(R.id.direccion2);
        e5=(EditText)findViewById(R.id.descripcion);
        e6=(EditText)findViewById(R.id.id);
        buscar = (Button)findViewById(R.id.btnBuscar);
        ingreso = (Button)findViewById(R.id.ingreso);
        salir = (Button)findViewById(R.id.salir);
        informe = (Button)findViewById(R.id.informe);
    }


    public void buscarUsuarios(String URL){
        JsonArrayRequest jsonArrayRequest=new JsonArrayRequest(URL, new Response.Listener<JSONArray>() {
            @Override
            public void onResponse(JSONArray response) {
                JSONObject jsonObject = null;
                for (int i = 0; i < response.length(); i++) {
                    try {
                        jsonObject = response.getJSONObject(i);
                        e1.setText(jsonObject.getString("ingfecha"));
                        e2.setText(jsonObject.getString("ingcliente"));
                        e3.setText(jsonObject.getString("ingdireccion"));
                        e4.setText(jsonObject.getString("ingtelefono"));
                        e5.setText(jsonObject.getString("ingdescripcion"));

                    } catch (JSONException e) {
                        Toast.makeText(getApplicationContext(), e.getMessage(), Toast.LENGTH_SHORT).show();
                    }
                }

            }
        }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {
                Toast.makeText(getApplicationContext(), "Error de Conexión", Toast.LENGTH_SHORT).show();
            }
        }
        );
        requestQueue=Volley.newRequestQueue(this);
        requestQueue.add(jsonArrayRequest);

    }
    public void regresar(View view) {
        Intent i = new Intent(this, MainActivity.class);
        startActivity(i);
    }
        }
