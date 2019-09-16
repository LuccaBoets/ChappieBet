using Microsoft.AspNetCore.Mvc.ModelBinding;

internal class RegisterResult : ModelStateDictionary
{
    public bool Successful { get; set; }
    public object Errors { get; set; }
}