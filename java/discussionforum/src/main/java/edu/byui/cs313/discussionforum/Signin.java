/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.byui.cs313.discussionforum;

import java.io.BufferedReader;
import java.io.FileNotFoundException;
import java.io.FileReader;
import javax.servlet.ServletException;
import java.io.IOException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 *
 * @author michaelwiltbank
 */
@WebServlet(name = "Signin", urlPatterns = {"/Signin"})
public class Signin extends HttpServlet {

    /**
     * Processes requests for both HTTP <code>GET</code> and <code>POST</code>
     * methods.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {

        request.getRequestDispatcher("index.jsp").forward(request, response);

    }

    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        String username = request.getParameter("txtUsername");
        String password = request.getParameter("txtPassword");
        String fileName;
        fileName = request.getRealPath("users.txt");

        boolean correct = this.readFile(fileName, username, password);

        if (correct != true) {
            response.sendRedirect("invalidSignin.jsp");
        }
        else {
            request.getSession().setAttribute("username", username);
            response.sendRedirect("viewPosts.jsp");
        }

    }

    public boolean readFile(String fileName, String username, String password) throws FileNotFoundException, IOException {
        boolean test = false;
        String[] userData;
        try (FileReader fileReader = new FileReader(fileName)) {
            BufferedReader reader = new BufferedReader(fileReader);
            String userInfo;

            while ((userInfo = reader.readLine()) != null) {
                userData = userInfo.split(",");
                String savedUser = userData[0];
                String savedPassword = userData[1];

                if (savedUser.equals(username) && savedPassword.equals(password)) {
                    test = true;
                    return test;
                }
            }
        }
        return test;
    }
}
