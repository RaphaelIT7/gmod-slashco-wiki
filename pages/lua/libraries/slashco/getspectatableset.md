<function name="GetSpectatableSet" parent="SlashCo" type="libraryfunc">
	<description>
		Returns all players and dead bodies that can currently be spectated.<br>
		Survivors and dead bodies are always included.<br>
		Slashers are included only if their CannotBeSpectated slasher value is not enabled.
	</description>
	<realm>Server</realm>
	<rets>
		<ret name="targets" type="table<Entity>">
			A table containing the entities that can currently be spectated.
		</ret>
	</rets>
</function>