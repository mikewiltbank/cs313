/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.byui.cs313.discussionforum;


import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;
import static java.lang.System.out;
import java.util.ArrayList;
import java.util.Collections;
import java.util.List;

/**
 *
 * @author michaelwiltbank
 */
@WebServlet(name = "CreatePost", urlPatterns = {"/CreatePost"})
public class CreatePost extends HttpServlet {

    /**
     * Processes requests for both HTTP <code>GET</code> and <code>POST</code>
     * methods.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     *
     */
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {

        request.getRequestDispatcher("addPost.jsp").forward(request, response);
    }

    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");

        HttpSession session = request.getSession();
        String post = request.getParameter("txtComment");
        String username = (String) session.getAttribute("username");
        String fileName = request.getRealPath("posts.txt");
        request.getSession().setAttribute("newPost", "<strong>" + username + ": </strong>" + post);
        //getServletContext().getRequestDispatcher("viewPosts.jsp").forward(request,response);
        
        //List<String> posts = new ArrayList<>();

        writeToFile(username, post, fileName);
        readFile(fileName);
                
        request.getRequestDispatcher("viewPosts.jsp").forward(request, response);

    }

    public void writeToFile(String username, String post, String fileName) throws FileNotFoundException, IOException {
        BufferedReader reader = new BufferedReader(new FileReader(new File(fileName)));
        try (BufferedWriter writer = new BufferedWriter(new FileWriter(new File(fileName), true))) {
            String l = null;
            writer.write(username + "," + post);
            writer.newLine();
            writer.close();
            reader.close();
        }
    }
    
    public void readFile(String fileName) throws FileNotFoundException, IOException {
        String[] postData;
        try (FileReader fileReader = new FileReader(fileName)) {
            BufferedReader reader = new BufferedReader(fileReader);
            String userInfo;

            while ((userInfo = reader.readLine()) != null) {
                postData = userInfo.split(",");
                String user = postData[0];
                String comment = postData[1];
                //request.getSession().setAttribute("newPost" + i, "<strong>" + user + ": </strong>" + comment);
                //request.getRequestDispatcher("viewPosts.jsp").forward(request, response);
                //i++;
            }
        }
    }
}