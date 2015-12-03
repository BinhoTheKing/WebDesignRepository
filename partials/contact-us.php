<div layout='column'>
    <section>
        
    </section>
    <section layout='row' layout-align='center'>
    <form flex='70' layout="column" name="userForm">
        <div layout>
            <md-input-container flex>
                <label>Digite seu nome</label>
                <input ng-model="contact.name"/>
            </md-input-container>
            <md-datepicker ng-model="contact.date" md-placeholder="Data"></md-datepicker>
        </div>
    </form>
    </section>
</div>