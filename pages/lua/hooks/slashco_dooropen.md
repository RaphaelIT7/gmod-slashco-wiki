<function name="SlashCo_DoorOpen" parent="" type="hook">
	<description>
		Called whenever a `prop_door_rotating` entity that existed at map load finishes opening.<br>
		It's fired through an `OnOpen` entity output added to every such door during `InitPostEntity`, which runs `hook.Run('SlashCo_DoorOpen')` via a `lua_run` entity.<br>
		No arguments are passed, but the door that triggered the output can be accessed through the global `CALLER` inside the hook.
	</description>
	<realm>Server</realm>
</function>