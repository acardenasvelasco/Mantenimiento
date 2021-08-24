package com.example.webservicessencillo;

import androidx.appcompat.app.AppCompatActivity;
import androidx.core.app.ActivityCompat;

import android.Manifest;
import android.content.pm.PackageManager;
import android.os.Bundle;
import android.os.Environment;
import android.provider.DocumentsContract;
import android.content.Intent;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;


import com.lowagie.text.Document;
import com.lowagie.text.DocumentException;
import com.lowagie.text.Paragraph;
import com.lowagie.text.pdf.PdfPTable;
import com.lowagie.text.pdf.PdfWriter;

import java.io.File;
import java.io.FileOutputStream;
import java.io.IOException;

public class MainActivity3 extends AppCompatActivity {

    String NOMBRE_DIRECTORIO = "MisPDFs";
    String NOMBRE_DOCUMENTO = "MiPDF.pdf";

    EditText etTexto, ot3, fecha3, tecnico3, descripcion3;
    Button btnGenerar;

    Button busqueda3, ingreso3, salir3;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main3);
        busqueda3 = (Button)findViewById(R.id.busqueda3);
        ingreso3 = (Button)findViewById(R.id.ingreso3);
        salir3 = (Button) findViewById(R.id.salir3);

        ot3 = (EditText)findViewById(R.id.ot3);
        fecha3 = (EditText)findViewById(R.id.fecha3);
        tecnico3 = (EditText)findViewById(R.id.tecnico3);
        descripcion3 = (EditText)findViewById(R.id.descripcion3);
        btnGenerar = (Button)findViewById(R.id.pdf);

        //Permisos
        if(ActivityCompat.checkSelfPermission(this, Manifest.permission.WRITE_EXTERNAL_STORAGE) !=
                PackageManager.PERMISSION_GRANTED &&
                ActivityCompat.checkSelfPermission(this,Manifest.permission.WRITE_EXTERNAL_STORAGE) !=
                        PackageManager.PERMISSION_GRANTED) {
            ActivityCompat.requestPermissions(this,new String[]{Manifest.permission.WRITE_EXTERNAL_STORAGE,},
                    1000);
        }

        //Genera el Documento
        btnGenerar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                crearPDF();
                Toast.makeText(MainActivity3.this,"SE CREO EL PDF", Toast.LENGTH_LONG).show();
            }
        });

        busqueda3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                startActivity(new Intent(MainActivity3.this, MainActivity.class));
            }
        });

        ingreso3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                startActivity(new Intent(MainActivity3.this, MainActivity2.class));
            }
        });

        salir3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(Intent.ACTION_MAIN);
                intent.addCategory(Intent.CATEGORY_HOME);
                intent.setFlags(Intent.FLAG_ACTIVITY_NEW_TASK);
                startActivity(intent);
            }
        });

    }


    public void crearPDF() {
        Document documento = new Document();

        try {
            File file = crearFichero(NOMBRE_DOCUMENTO);
            FileOutputStream ficheroPDF = new FileOutputStream(file.getAbsolutePath());

            PdfWriter writer = PdfWriter.getInstance(documento, ficheroPDF);

            documento.open();

            documento.add(new Paragraph("RESUMEN DE ORDE DE TRABAJO \n\n"));
            documento.add(new Paragraph( ot3.getText().toString()+"\n\n"));
            documento.add(new Paragraph( fecha3.getText().toString()+"\n\n"));
            documento.add(new Paragraph( tecnico3.getText().toString()+"\n\n"));
            documento.add(new Paragraph( descripcion3.getText().toString()+"\n\n"));



        } catch(DocumentException e) {
        } catch(IOException e) {
        } finally {
            documento.close();
        }
    }





    public File crearFichero(String nombreFichero) {
        File ruta = getRuta();

        File fichero = null;
        if(ruta != null) {
            fichero = new File(ruta, nombreFichero);
        }

        return fichero;
    }





    public File getRuta() {
        File ruta = null;

        if(Environment.MEDIA_MOUNTED.equals(Environment.getExternalStorageState())) {
            ruta = new File(Environment.getExternalStoragePublicDirectory(Environment.DIRECTORY_DOWNLOADS), NOMBRE_DIRECTORIO);

            if(ruta != null) {
                if(!ruta.mkdirs()) {
                    if(!ruta.exists()) {
                        return null;
                    }
                }
            }

        }
        return ruta;
    }


















}






