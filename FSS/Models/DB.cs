using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Data.Entity;
using System.Data.Entity.Infrastructure;

namespace FSS.Models
{
    public class DB : DbContext
    {
        public DB() : base("name=defalut")
        {

        }
        public virtual DbSet<Freg> Fregs
        {
            get;
            set;
        }
    }
}