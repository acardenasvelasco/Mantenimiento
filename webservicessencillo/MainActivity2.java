package com.example.webservicessencillo;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;

public class MainActivity2 extends AppCompatActivity {
    EditText e21,e22,e23,e24,e25,e26;
    Button b2,busqueda2, salir2, mostrar, informe2;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main2);

        relacionamosVistas2();

        busqueda2=(Button)findViewById(R.id.busqueda2);
        salir2=(Button)findViewById(R.id.salir2);
        informe2=(Button) findViewById(R.id.informe2);

        busqueda2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                startActivity(new Intent(MainActivity2.this, MainActivity.class));
            }
        });

        informe2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                startActivity(new Intent(MainActivity2.this, MainActivity3.class));
            }
        });

        salir2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(Intent.ACTION_MAIN);
                intent.addCategory(Intent.CATEGORY_HOME);
                intent.setFlags(Intent.FLAG_ACTIVITY_NEW_TASK);
                startActivity(intent);
            }
        });
        mostrar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                e21.setText("");
                e22.setText("");
                e23.setText("");
                e24.setText("");
                e25.setText("");
                e26.setText("");
                }
        });
    }
    public void relacionamosVistas2(){
        e21=(EditText)findViewById(R.id.ot2);
        e22=(EditText)findViewById(R.id.fecha2);
        e23=(EditText)findViewById(R.id.cliente2);
        e24=(EditText)findViewById(R.id.direccion2);
        e25=(EditText)findViewById(R.id.telefono2);
        e26=(EditText)findViewById(R.id.descripcion2);
        b2=(Button) findViewById(R.id.acceso);
        mostrar=(Button)findViewById(R.id.mostrar);

    }

    public void validar(View v){

        final String ingid=e21.getText().toString();
        final String ingfecha=e22.getText().toString();
        final String ingcliente=e23.getText().toString();
        final String ingdireccion=e24.getText().toString();
        final String ingtelefono=e25.getText().toString();
        final String ingdescripcion=e26.getText().toString();

        String url="http://www.sanedrac.info/android/ingreso.php?ingid="+ingid+"&ingfecha="+ingfecha+"&ingcliente="+ingcliente+"&ingdireccion="+ingdireccion+"&ingtelefono="+ingtelefono+"&ingdescripcion="+ingdescripcion;
        RequestQueue servicio= Volley.newRequestQueue(this);
        StringRequest respuesta=new StringRequest(
                Request.Method.GET, url, new Response.Listener<String>() {
            @Override
            public void onResponse(String response) {
                Toast.makeText(getApplicationContext(),
                        response,Toast.LENGTH_LONG).show();


            }
        }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {
                Toast.makeText(getApplicationContext(),
                        "Error comunicación",Toast.LENGTH_SHORT).show();
            }
        });
        servicio.add(respuesta);
    }
}