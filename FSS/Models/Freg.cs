using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;

namespace FSS.Models
{
    [Table("freg")]
    public class Freg
    {
        [Key]
        public int Id { get; set; }
        public string first_name { get; set; }
        public string address { get; set; }
        public string city { get; set; }
        public string pin { get; set; }
        public string mobile_no { get; set; }
        public string email { get; set; }
        public string user_name { get; set; }
        public string password { get; set; }
    }
}