<function name="AddDangerLevel" parent="SlashCo" type="libraryfunc">
	<description>
		Registers or overrides a dangerlevel.
	</description>
	<realm>Shared</realm>
	<args>
		<arg name="dangerLevel" type="DangerLevel">The table containing the dangerlevel data</arg>
		<arg name="id" type="number" default="nil">
			The id to force for setting.<br>
			**Be careful when using this** as you could always override an existing dangerlevel!
		</arg>
	</args>
</function>

<example>
	<code>
SlashCo.AddDangerLevel({
	Name = "ExampleDanger",
	Color = Color(255, 0, 0),
	Sound = "slashco/difficulty/devastating.mp3",
})

-- Now like normal, you can do this in a slasher
SLASHER.DangerLevel = SlashCo.DangerLevel.ExampleDanger

-- Names are double linked, so to get the name of a danger level number you can do
print( SlashCo.DangerLevel[ SLASHER.DangerLevel ] )
-- Will print out: "ExampleDanger"
	</code>
</example>