using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Ugn
{
    #region Authenticate
    public class Authenticate
    {
        #region Member Variables
        protected unknown _UID;
        protected string _Email;
        protected string _Password;
        protected string _Name;
        protected bool _isBand;
        #endregion
        #region Constructors
        public Authenticate() { }
        public Authenticate(string Email, string Password, string Name, bool isBand)
        {
            this._Email=Email;
            this._Password=Password;
            this._Name=Name;
            this._isBand=isBand;
        }
        #endregion
        #region Public Properties
        public virtual unknown UID
        {
            get {return _UID;}
            set {_UID=value;}
        }
        public virtual string Email
        {
            get {return _Email;}
            set {_Email=value;}
        }
        public virtual string Password
        {
            get {return _Password;}
            set {_Password=value;}
        }
        public virtual string Name
        {
            get {return _Name;}
            set {_Name=value;}
        }
        public virtual bool IsBand
        {
            get {return _isBand;}
            set {_isBand=value;}
        }
        #endregion
    }
    #endregion
}