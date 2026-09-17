<function name="TylerSwitchForm" parent="" type="libraryfunc">
	<description>
		Switches the slasher `Tyler` into a new form (Specter, Creator, Pre-Destroyer or Destroyer), resetting his per-form state and timers.<br>
		Stops the destroyer sounds and effects when leaving the Destroyer form, and starts the appropriate hiding/background music when entering Creator or Specter.<br>
		If switching into Creator while his anger is above `50`, there's a random chance he switches into Pre-Destroyer instead.
		<internal>
			It is only exposed for debugging purposes!
		</internal>
	</description>
	<realm>Server</realm>
	<args>
		<arg name="slasher" type="Player">The player currently playing as Tyler</arg>
		<arg name="newForm" type="number">The form to switch to: `0` (Specter), `1` (Creator), `2` (Pre-Destroyer) or `3` (Destroyer)</arg>
	</args>
</function>
