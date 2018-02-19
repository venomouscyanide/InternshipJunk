package com.example.paul.myapplication;

import android.provider.Settings;
import android.support.v7.app.ActionBarActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import org.apache.http.HttpResponse;
import org.apache.http.client.ClientProtocolException;
import org.apache.http.client.HttpClient;
import org.apache.http.client.entity.UrlEncodedFormEntity;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.impl.client.DefaultHttpClient;
import org.apache.http.message.BasicNameValuePair;
import org.apache.http.params.BasicHttpParams;
import org.apache.http.params.HttpConnectionParams;
import org.apache.http.params.HttpParams;
import org.apache.http.util.EntityUtils;
import org.json.JSONArray;
import org.json.JSONObject;
import org.apache.http.NameValuePair;

import java.io.IOException;
import java.io.UnsupportedEncodingException;
import java.net.HttpCookie;
import java.security.BasicPermission;
import java.util.ArrayList;
import java.util.List;


public class MainActivity extends ActionBarActivity {

    //Button clear= (Button) findViewById(R.id.clear);
    EditText username,password;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        username= (EditText) findViewById(R.id.username);
        password= (EditText) findViewById(R.id.password);
        Button submit= (Button) findViewById(R.id.submit);

        JSONArray ja=new JSONArray();
        JSONObject jo =new JSONObject();


        submit.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                List<NameValuePair> reg=new ArrayList<NameValuePair>();
                String name=username.getText().toString();String pass=password.getText().toString();
//                reg.add(new BasicNameValuePair("uname", name));
//                reg.add(new BasicNameValuePair("pass", pass));

                HttpClient client = null;
                HttpPost post =null;
                HttpResponse response =null;

                HttpParams httpParameters = new BasicHttpParams();
                HttpConnectionParams.setConnectionTimeout(httpParameters, 3000);
                HttpConnectionParams.setSoTimeout(httpParameters, 8000);

                try {
                    client = new DefaultHttpClient(httpParameters);
                    post = new HttpPost("http://192.168.137.1/android.php");
                    post.setEntity(new UrlEncodedFormEntity(reg));
                    response = client.execute(post);

                    if (response.getStatusLine().getStatusCode() != 200) {
                        Log.e("connectivity","Invalid status code" + response.getStatusLine().getStatusCode());
                    }
                    else {
                        String receivedData = EntityUtils.toString(response.getEntity());
                        if (receivedData.equals("Success")) {
                            Toast.makeText(MainActivity.this, "Logged in !", Toast.LENGTH_SHORT).show();
                        }
                        else {
                            Toast.makeText(MainActivity.this, "Log in error", Toast.LENGTH_SHORT).show();
                        }
                    }

                } catch (ClientProtocolException e) {
                    e.printStackTrace();
                } catch (UnsupportedEncodingException e) {
                    e.printStackTrace();
                } catch (IOException e) {
                    e.printStackTrace();
                }

//                if (username.getText().toString().equals("admin") && password.getText().toString().equals("admin")) {
//                    Toast.makeText(MainActivity.this, "Logged in !", Toast.LENGTH_SHORT).show();
//                } else
//
//                {
//                    Toast.makeText(MainActivity.this, "Log in error", Toast.LENGTH_SHORT).show();
//                }

            }

        });
    }


    public void clearb(View v)
    {
        username.setText("");
        password.setText("");
    }


    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.menu_main, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.
        int id = item.getItemId();

        //noinspection SimplifiableIfStatement
        if (id == R.id.action_settings) {
            return true;
        }

        return super.onOptionsItemSelected(item);
    }
}
