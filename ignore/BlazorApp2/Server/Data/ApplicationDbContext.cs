using Microsoft.AspNetCore.Identity.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore;

public class ApplicationDbContext : IdentityDbContext
{
    // initial migration for the database
    // Add-Migration CreateIdentitySchema -o Data/Migations

    // Update database
    // Update-Database

    public ApplicationDbContext(DbContextOptions options) : base(options)
    {
    }
}