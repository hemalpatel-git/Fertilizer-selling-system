using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using FSS.Models;

namespace FSS.Controllers
{
    public class RegistrationController : Controller
    {
        private DB db = new DB();
        // GET: Registration
        public ActionResult Index()
        {
            return View(db.Fregs.ToList());
        }

        public ActionResult Register()
        {
            return View();
        }

        [HttpPost]
        public ActionResult Register([Bind(Include = "Id,first_name,address,city,pin,moblie_no,email,user_name,password")] Freg user)
        {
            if(ModelState.IsValid)
            {
                db.Fregs.Add(user);
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            return View();
        }
    }
}